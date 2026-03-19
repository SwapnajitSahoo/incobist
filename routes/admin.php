<?php

use App\Http\Controllers\BankingController;
use App\Http\Controllers\NavbarMenuController;
use App\Http\Controllers\PageContentController;
use App\Http\Controllers\PageSectionController;
use App\Http\Controllers\SeoMetaController;
use App\Http\Controllers\InsightBlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PotentialRoiController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HealthcareIndustryController;
use App\Http\Controllers\HightechIndustryController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\InclusionCardController;
use App\Http\Controllers\IndustryController;
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

// Insight Blogs
Route::get('insight-blogs', [InsightBlogController::class, 'index'])->name('insight-blogs.index');
Route::get('insight-blogs/create', [InsightBlogController::class, 'create'])->name('insight-blogs.create');
Route::post('insight-blogs/store', [InsightBlogController::class, 'store'])->name('insight-blogs.store');
Route::get('insight-blogs/{id}/edit', [InsightBlogController::class, 'edit'])->name('insight-blogs.edit');
Route::post('insight-blogs/{id}/update', [InsightBlogController::class, 'update'])->name('insight-blogs.update');
Route::post('insight-blogs/{id}/delete', [InsightBlogController::class, 'destroy'])->name('insight-blogs.delete');

// Products
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::post('products/{id}/update', [ProductController::class, 'update'])->name('products.update');
Route::post('products/{id}/delete', [ProductController::class, 'destroy'])->name('products.delete');

// FAQs
Route::get('faqs', [FaqController::class, 'index'])->name('faqs.index');
Route::get('faqs/create', [FaqController::class, 'create'])->name('faqs.create');
Route::post('faqs/store', [FaqController::class, 'store'])->name('faqs.store');
Route::get('faqs/{id}/edit', [FaqController::class, 'edit'])->name('faqs.edit');
Route::post('faqs/{id}/update', [FaqController::class, 'update'])->name('faqs.update');
Route::post('faqs/{id}/delete', [FaqController::class, 'destroy'])->name('faqs.delete');

// Potential ROI
Route::get('potential-rois', [PotentialRoiController::class, 'index'])->name('roi.index');
Route::post('potential-rois/{id}/delete', [PotentialRoiController::class, 'destroy'])->name('roi.delete');

// Contacts
Route::get('contact-inquiries', [ContactController::class, 'index'])->name('contacts.index');
Route::post('contact-inquiries/{id}/delete', [ContactController::class, 'destroy'])->name('contacts.delete');

// Resources
Route::get('resources', [ResourceController::class, 'index'])->name('resources.index');
Route::get('resources/create', [ResourceController::class, 'create'])->name('resources.create');
Route::post('resources', [ResourceController::class, 'store'])->name('resources.store');
Route::get('resources/{id}/edit', [ResourceController::class, 'edit'])->name('resources.edit');
Route::post('resources/{id}', [ResourceController::class, 'update'])->name('resources.update');
Route::post('resources/{id}/delete', [ResourceController::class, 'destroy'])->name('resources.delete');

// Inclusion Cards
Route::get('inclusion-cards', [InclusionCardController::class, 'index'])->name('inclusion-cards.index');
Route::get('inclusion-cards/create', [InclusionCardController::class, 'create'])->name('inclusion-cards.create');
Route::post('inclusion-cards/store', [InclusionCardController::class, 'store'])->name('inclusion-cards.store');
Route::get('inclusion-cards/{id}/edit', [InclusionCardController::class, 'edit'])->name('inclusion-cards.edit');
Route::post('inclusion-cards/{id}/update', [InclusionCardController::class, 'update'])->name('inclusion-cards.update');
Route::post('inclusion-cards/{id}/delete', [InclusionCardController::class, 'destroy'])->name('inclusion-cards.delete');

// Industry Cards
Route::get('industry', [IndustryController::class, 'index'])->name('industry.index');
Route::get('industry/create', [IndustryController::class, 'create'])->name('industry.create');
Route::post('industry/store', [IndustryController::class, 'store'])->name('industry.store');

Route::get('industry/{id}/edit', [IndustryController::class, 'edit'])->name('industry.edit');
Route::post('industry/{id}/update', [IndustryController::class, 'update'])->name('industry.update');

Route::post('industry/{id}/delete', [IndustryController::class, 'destroy'])->name('industry.delete');

// Hightech Cards
Route::get('hightech-industry', [HightechIndustryController::class, 'index'])->name('hightech.index');
Route::get('hightech-industry/create', [HightechIndustryController::class, 'create'])->name('hightech.create');
Route::post('hightech-industry/store', [HightechIndustryController::class, 'store'])->name('hightech.store');

Route::get('hightech-industry/{id}/edit', [HightechIndustryController::class, 'edit'])->name('hightech.edit');
Route::post('hightech-industry/{id}/update', [HightechIndustryController::class, 'update'])->name('hightech.update');

Route::post('hightech-industry/{id}/delete', [HightechIndustryController::class, 'destroy'])->name('hightech.delete');

// Healthcare Cards
Route::get('healthcare-industry', [HealthcareIndustryController::class, 'index'])->name('healthcare.index');
Route::get('healthcare-industry/create', [HealthcareIndustryController::class, 'create'])->name('healthcare.create');
Route::post('healthcare-industry/store', [HealthcareIndustryController::class, 'store'])->name('healthcare.store');

Route::get('healthcare-industry/{id}/edit', [HealthcareIndustryController::class, 'edit'])->name('healthcare.edit');
Route::post('healthcare-industry/{id}/update', [HealthcareIndustryController::class, 'update'])->name('healthcare.update');

Route::post('healthcare-industry/{id}/delete', [HealthcareIndustryController::class, 'destroy'])->name('healthcare.delete');


// Banking Cards
Route::get('banking-industry', [BankingController::class, 'index'])->name('banking.index');
Route::get('banking-industry/create', [BankingController::class, 'create'])->name('banking.create');
Route::post('banking-industry/store', [BankingController::class, 'store'])->name('banking.store');

Route::get('banking-industry/{id}/edit', [BankingController::class, 'edit'])->name('banking.edit');
Route::post('banking-industry/{id}/update', [BankingController::class, 'update'])->name('banking.update');

Route::post('banking-industry/{id}/delete', [BankingController::class, 'destroy'])->name('banking.delete');