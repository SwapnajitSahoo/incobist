<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\NavbarMenu;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('layouts.navbar', function ($view) {

            $menus = NavbarMenu::whereNull('parent_id')
                ->where('is_active', 1)
                ->orderBy('menu_order')
                ->with('children')
                ->get();

            $view->with('menus', $menus);
        });
    }
}
