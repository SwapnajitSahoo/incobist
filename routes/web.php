<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(HomeController::class)->group(function () {

    Route::get('/index', 'index')->name('index');
    Route::get('/industry', 'industry')->name('industry');
    Route::get('/high_tech_industry', 'highTechIndustry')->name('high_tech_industry');
    Route::get('/healthcare', 'healthcare')->name('healthcare');
    Route::get('/retail', 'retail')->name('retail');
    Route::get('/travel', 'travel')->name('travel');
    Route::get('/banking', 'banking')->name('banking');
    Route::get('/manufacturing', 'manufacturing')->name('manufacturing');
    Route::get('/education', 'education')->name('education');
    Route::get('/logistics', 'logistics')->name('logistics');
    Route::get('/public_sector', 'publicSector')->name('public_sector');
    Route::get('/resources', 'resources')->name('resources');
    Route::get('/insight_blogs', 'insightBlogs')->name('insight_blogs');
    Route::get('/solution', 'solution')->name('solution');
    Route::get('/experience', 'experience')->name('experience');
    Route::get('/company', 'company')->name('company');
    Route::get('/career', 'career')->name('career');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/booking', 'booking')->name('booking');
    Route::get('/blogs', 'blog')->name('blogs');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/products_update', 'productsUpdate')->name('products_update');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/media', 'media')->name('media');

    // ✅ Fixed methods
    Route::get('/privacy-policy', 'privacyPolicy')->name('privacy-policy');
    Route::get('/terms-conditions', 'termsConditions')->name('terms-conditions');
    Route::get('/refund-policy', 'refundPolicy')->name('refund-policy');

Route::view('/coming-soon', 'coming-soon')->name('coming-soon');

});

Route::post('/contact-submit', [ContactController::class, 'store'])->name('contact.submit');
Route::post('/project-form',[ProjectController::class,'store'])->name('project.form');


Route::get('/blog/{id}', [HomeController::class, 'blogSingle'])->name('blog');
Route::get('/service/{id}', [HomeController::class, 'serviceSingle'])->name('service');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
