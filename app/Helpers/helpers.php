<?php

use App\Models\NavbarMenu;

if (!function_exists('getMenuId')) {
    function getMenuId()
    {
        $slug = request()->segment(1);

        $menu = NavbarMenu::where('url', $slug)->first();

        return $menu?->id;
    }
}