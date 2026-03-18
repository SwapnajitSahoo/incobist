<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageContent;
use App\Models\PageSection;

class PageSectionController extends Controller
{
    public function store(Request $request, $pageId)
    {
        $request->validate([
            'type'    => 'required|string',
            'content' => 'required|array',
        ]);

        $page      = PageContent::findOrFail($pageId);
        $lastOrder = PageSection::where('page_id', $pageId)->max('sort_order') ?? 0;

        PageSection::create([
            'page_id'    => $page->id,
            'type'       => $request->type,
            'content'    => $request->input('content'),
            'sort_order' => $lastOrder + 1,
            'is_active'  => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.page-contents.edit', $pageId)
                         ->with('success', ucfirst($request->type) . ' section added.');
    }

    public function update(Request $request, $id)
    {
        $section = PageSection::findOrFail($id);

        $request->validate([
            'content' => 'required|array',
        ]);

        $section->update([
            'content'   => $request->input('content'),
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.page-contents.edit', $section->page_id)
                         ->with('success', 'Section updated.');
    }

    public function destroy($id)
    {
        $section = PageSection::findOrFail($id);
        $pageId  = $section->page_id;
        $section->delete();

        return redirect()->route('admin.page-contents.edit', $pageId)
                         ->with('success', 'Section deleted.');
    }

    public function reorder(Request $request)
    {
        $request->validate([
            'order'   => 'required|array',
            'order.*' => 'integer',
        ]);

        foreach ($request->order as $position => $sectionId) {
            PageSection::where('id', $sectionId)
                       ->update(['sort_order' => $position + 1]);
        }

        return response()->json(['success' => true]);
    }
}
