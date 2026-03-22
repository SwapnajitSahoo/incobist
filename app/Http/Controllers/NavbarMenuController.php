<?php

namespace App\Http\Controllers;

use App\Models\NavbarMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NavbarMenuController extends Controller
{
    // ─── INDEX ────────────────────────────────────────────────────────────────
    public function index()
    {
        $menus = NavbarMenu::with('parent')
            ->orderBy('menu_order')
            ->get();

        return view('admin.cms.navbar_index', compact('menus'));
    }

    // ─── SETUP / CREATE FORM ──────────────────────────────────────────────────
    public function navSetup()
    {
        $parents = NavbarMenu::whereNull('parent_id')->orderBy('menu_order')->get();
        return view('admin.cms.navbar_setup', compact('parents'));
    }

    // ─── STORE ────────────────────────────────────────────────────────────────
    public function navStore(Request $request)
    {
        $validated = $request->validate([
            'title'      => 'required|string|max:255',
            'slug'       => 'nullable|string|max:255|unique:navbar_menus,slug',
            'url'        => 'nullable|string|max:255',
            'parent_id'  => 'nullable|exists:navbar_menus,id',
            'menu_order' => 'integer|min:0',
            'target'     => 'required|in:_self,_blank',
            'icon'       => 'nullable|string|max:255',
            'is_active'  => 'boolean',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        if (empty($validated['url'])) {
            $validated['url'] = $validated['slug'];
        }

        $validated['is_active'] = $request->boolean('is_active');

        NavbarMenu::create($validated);

        return redirect()->route('admin.navbar-menu.index')
            ->with('success', 'Menu item created successfully.');
    }

    // ─── EDIT FORM ────────────────────────────────────────────────────────────
    public function edit(NavbarMenu $navbarMenu)
    {
        $parents = NavbarMenu::whereNull('parent_id')
            ->where('id', '!=', $navbarMenu->id)
            ->orderBy('menu_order')
            ->get();

        return view('admin.cms.navbar_edit', compact('navbarMenu', 'parents'));
    }

    // ─── UPDATE ───────────────────────────────────────────────────────────────
    public function update(Request $request, NavbarMenu $navbarMenu)
    {
        $validated = $request->validate([
            'title'      => 'required|string|max:255',
            'slug'       => 'nullable|string|max:255|unique:navbar_menus,slug,' . $navbarMenu->id,
            'url'        => 'nullable|string|max:255',
            'parent_id'  => 'nullable|exists:navbar_menus,id',
            'menu_order' => 'integer|min:0',
            'target'     => 'required|in:_self,_blank',
            'icon'       => 'nullable|string|max:255',
            'is_active'  => 'boolean',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        if (empty($validated['url'])) {
            $validated['url'] = $validated['slug'];
        }

        $validated['is_active'] = $request->boolean('is_active');

        $navbarMenu->update($validated);

        return redirect()->route('admin.navbar-menu.index')
            ->with('success', 'Menu item updated successfully.');
    }

    // ─── TOGGLE ACTIVE ────────────────────────────────────────────────────────
    public function toggleActive(NavbarMenu $navbarMenu)
    {
        $navbarMenu->update(['is_active' => !$navbarMenu->is_active]);

        return redirect()->back()
            ->with('success', 'Menu item status updated.');
    }

    // ─── DESTROY ──────────────────────────────────────────────────────────────
    public function destroy(NavbarMenu $navbarMenu)
    {
        $navbarMenu->delete();

        return redirect()->route('admin.navbar-menu.index')
            ->with('success', 'Menu item deleted.');
    }
}