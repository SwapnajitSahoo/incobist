<?php

namespace App\Http\Controllers;

use App\Models\IncoIndustry;
use App\Models\Industry;
use App\Models\IndustryCard;
use App\Models\IndustryService;
use App\Models\NavbarMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndustryController extends Controller
{
    protected array $types = ['serve', 'focus', 'service'];
 
    public function index()
    {
        $industries = IncoIndustry::with('navbarMenu')
            ->withCount(['cards', 'challenges'])
            ->latest()
            ->paginate(10);
 
        return view('admin.industry.index', compact('industries'));
    }
 
    public function create()
    {
        $navbarMenus = NavbarMenu::where('is_active', 1)->get();
        $types       = $this->types;
 
        return view('admin.industry.create', compact('navbarMenus', 'types'));
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'nav_menu_id'      => 'required|exists:navbar_menus,id',
            // 'type'             => 'required|in:serve,focus,service',
            'page_title'       => 'nullable|string|max:255',
            'page_img'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'heading'          => 'nullable|string|max:255',
            'heading_subtitle' => 'nullable|string|max:255',
            'lending_title'    => 'nullable|string|max:255',
            'lending_desc'     => 'nullable|string',
            'linkedin_link'    => 'nullable|url|max:255',
            'twitter_link'     => 'nullable|url|max:255',
            'instagram_link'   => 'nullable|url|max:255',
            'fb_link'          => 'nullable|url|max:255',
            'wp_link'          => 'nullable|url|max:255',
            'tel_no'           => 'nullable|string|max:20',
        ]);
 
        $data              = $request->except(['page_img', '_token']);
        $data['is_active'] = $request->has('is_active') ? 1 : 0;
 
        if ($request->hasFile('page_img')) {
            $data['page_img'] = $request->file('page_img')->store('industries', 'public');
        }
 
        IncoIndustry::create($data);
 
        return redirect()->route('admin.industry.index')
            ->with('success', 'Industry created successfully.');
    }
 

    public function edit($id)
    {
        $industry    = IncoIndustry::findOrFail($id);
        $navbarMenus = NavbarMenu::where('is_active', 1)->get();
        $types       = $this->types;
 
        return view('admin.industry.edit', compact('industry', 'navbarMenus', 'types'));
    }
 
    public function update(Request $request, $id)
    {
        $industry = IncoIndustry::findOrFail($id);
 
        $request->validate([
            'nav_menu_id'      => 'required|exists:navbar_menus,id',
            // 'type'             => 'required|in:serve,focus,service',
            'page_title'       => 'nullable|string|max:255',
            'page_img'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'heading'          => 'nullable|string|max:255',
            'heading_subtitle' => 'nullable|string|max:255',
            'lending_title'    => 'nullable|string|max:255',
            'lending_desc'     => 'nullable|string',
            'linkedin_link'    => 'nullable|url|max:255',
            'twitter_link'     => 'nullable|url|max:255',
            'instagram_link'   => 'nullable|url|max:255',
            'fb_link'          => 'nullable|url|max:255',
            'wp_link'          => 'nullable|url|max:255',
            'tel_no'           => 'nullable|string|max:20',
        ]);
 
        $data              = $request->except(['page_img', '_token']);
        $data['is_active'] = $request->has('is_active') ? 1 : 0;
 
        if ($request->hasFile('page_img')) {
            if ($industry->page_img) {
                Storage::disk('public')->delete($industry->page_img);
            }
            $data['page_img'] = $request->file('page_img')->store('industries', 'public');
        }
 
        $industry->update($data);
 
        return redirect()->route('admin.industry.index')
            ->with('success', 'Industry updated successfully.');
    }
 
    public function destroy($id)
    {
        $industry = IncoIndustry::findOrFail($id);
 
        if ($industry->page_img) {
            Storage::disk('public')->delete($industry->page_img);
        }
 
        $industry->delete();
 
        return redirect()->route('admin.industry.index')
            ->with('success', 'Industry deleted successfully.');
    }
}
