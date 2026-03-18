<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeoMeta;
use App\Models\PageContent;

class SeoMetaController extends Controller
{
    public function store(Request $request, $pageId)
    {
        $request->validate([
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'og_image'         => 'nullable|string',
            'canonical_url'    => 'nullable|string',
        ]);

        PageContent::findOrFail($pageId);

        SeoMeta::create([
            'page_id'          => $pageId,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'og_image'         => $request->og_image,
            'canonical_url'    => $request->canonical_url,
        ]);

        return redirect()->route('admin.page-contents.edit', $pageId)
                         ->with('success', 'SEO meta saved.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'og_image'         => 'nullable|string',
            'canonical_url'    => 'nullable|string',
        ]);

        $seo = SeoMeta::findOrFail($id);

        $seo->update([
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'og_image'         => $request->og_image,
            'canonical_url'    => $request->canonical_url,
        ]);

        return redirect()->route('admin.page-contents.edit', $seo->page_id)
                         ->with('success', 'SEO meta updated.');
    }
}
