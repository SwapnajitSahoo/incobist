<?php

namespace App\Http\Controllers;

use App\Models\NavbarMenu;
use Illuminate\Http\Request;

class NavbarMenuController extends Controller
{
    public function navSetup()
    {
        $parents = NavbarMenu::whereNull('parent_id')->orderBy('menu_order')->get();
        return view('admin.cms.navbar_setup', compact('parents'));
    }

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

        $validated['is_active'] = $request->boolean('is_active');

        NavbarMenu::create($validated);

        return redirect()->route('admin.nav_setup')
            ->with('success', 'Menu item created successfully.');
    }

    public function edit(NavbarMenu $navbarMenu)
    {
        $parents = NavbarMenu::whereNull('parent_id')
            ->where('id', '!=', $navbarMenu->id)
            ->orderBy('menu_order')
            ->get();
        return view('navbar_menus.edit', compact('navbarMenu', 'parents'));
    }

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

        $validated['is_active'] = $request->boolean('is_active');

        $navbarMenu->update($validated);

        return redirect()->route('navbar-menus.index')
            ->with('success', 'Menu item updated successfully.');
    }

    public function destroy(NavbarMenu $navbarMenu)
    {
        $navbarMenu->delete();
        return redirect()->route('navbar-menus.index')
            ->with('success', 'Menu item deleted.');
    }
}
