<?php

use App\Http\Controllers\NavbarMenuController;
use App\Http\Controllers\PageContentController;
use App\Http\Controllers\PageSectionController;
use App\Http\Controllers\SeoMetaController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {

    if (!session()->has('welcome_shown')) {
        session(['welcome_shown' => true]);
        $showWelcome = true;
    } else {
        $showWelcome = false;
    }

    return view('admin.dashboard', [
        'pageTitle' => 'Sales Dashboard',
        'showWelcome' => $showWelcome
    ]);

})->name('dashboard');

Route::get('/navigation-setup', [NavbarMenuController::class, 'navSetup'])->name('nav_setup');
Route::post('/navigation-setup', [NavbarMenuController::class, 'navStore'])->name('navbar-menu-store');

// Page Contents
Route::get('page-contents', [PageContentController::class, 'index'])->name('page-contents.index');
Route::get('page-contents/create', [PageContentController::class, 'create'])->name('page-contents.create');
Route::post('page-contents/store', [PageContentController::class, 'store'])->name('page-contents.store');
Route::get('page-contents/{id}/edit', [PageContentController::class, 'edit'])->name('page-contents.edit');
Route::post('page-contents/{id}/update', [PageContentController::class, 'update'])->name('page-contents.update');
Route::post('page-contents/{id}/delete', [PageContentController::class, 'destroy'])->name('page-contents.delete');

// Page Sections
Route::post('page-sections/store/{pageId}', [PageSectionController::class, 'store'])->name('page-sections.store');
Route::post('page-sections/{id}/update', [PageSectionController::class, 'update'])->name('page-sections.update');
Route::post('page-sections/{id}/delete', [PageSectionController::class, 'destroy'])->name('page-sections.delete');
Route::post('page-sections/reorder', [PageSectionController::class, 'reorder'])->name('page-sections.reorder');

// SEO Meta
Route::post('seo-meta/store/{pageId}', [SeoMetaController::class, 'store'])->name('seo-meta.store');
Route::post('seo-meta/{id}/update', [SeoMetaController::class, 'update'])->name('seo-meta.update');