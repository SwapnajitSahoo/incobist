<?php

namespace App\Http\Controllers;
use App\Models\NavbarMenu;
use App\Models\PageContent;
use App\Models\SeoMeta;

use Illuminate\Http\Request;

class PageContentController extends Controller
{
    public function index()
    {
        $pages = PageContent::with('menu')->latest()->get();
        return view('admin.page_contents.index', compact('pages'));
    }

    public function create()
    {
        $menus = NavbarMenu::whereDoesntHave('pageContent')
                    ->where('is_active', 1)
                    ->get();
        return view('admin.page_contents.create', compact('menus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'menu_id'    => 'required|exists:navbar_menus,id|unique:page_contents,menu_id',
            'page_title' => 'required|string|max:255',
            'layout'     => 'required|in:full-width,default,sidebar',
        ]);

        $page = PageContent::create([
            'menu_id'      => $request->menu_id,
            'page_title'   => $request->page_title,
            'layout'       => $request->layout,
            'is_published' => $request->boolean('is_published'),
        ]);

        SeoMeta::create([
            'page_id'          => $page->id,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'og_image'         => $request->og_image,
            'canonical_url'    => $request->canonical_url,
        ]);

        return redirect()->route('admin.page-contents.edit', $page->id)
                         ->with('success', 'Page created! Now add sections.');
    }

    public function edit($id)
    {
        $pageContent = PageContent::with('sections', 'seoMeta', 'menu')
                            ->findOrFail($id);
        return view('admin.page_contents.edit', compact('pageContent'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'layout'     => 'required|in:full-width,default,sidebar',
        ]);

        $page = PageContent::findOrFail($id);

        $page->update([
            'page_title'   => $request->page_title,
            'layout'       => $request->layout,
            'is_published' => $request->boolean('is_published'),
        ]);

        $page->seoMeta()->updateOrCreate(
            ['page_id' => $page->id],
            [
                'meta_title'       => $request->meta_title,
                'meta_description' => $request->meta_description,
                'og_image'         => $request->og_image,
                'canonical_url'    => $request->canonical_url,
            ]
        );

        return redirect()->route('admin.page-contents.edit', $id)
                         ->with('success', 'Page updated successfully.');
    }

    public function destroy($id)
    {
        PageContent::findOrFail($id)->delete();

        return redirect()->route('admin.page-contents.index')
                         ->with('success', 'Page deleted.');
    }
}
