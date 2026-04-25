<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Resource;
use App\Models\InsightBlog;
use App\Models\Product;
use App\Models\Faq;
use App\Models\InclusionCard;
use App\Models\IncoIndustry;
use App\Helpers\helpers;
use App\Models\NavbarMenu;
use App\Models\Career;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function industry()
    {
        $menuId = getMenuId();
        $getIndustry = IncoIndustry::with(['cards' => function ($query) {
            $query->whereIn('type', ['serve', 'capable']);
        }])->where('nav_menu_id', $menuId)->first();

        return view('pages.industry', compact('getIndustry'));
    }

    public function industryDetails($slug)
    {
        // get menu by slug
        $menu = NavbarMenu::where('slug', $slug)->firstOrFail();

        $getIndustry = IncoIndustry::with('cards', 'challenges')->where('nav_menu_id', $menu->id)->first();
        if (!$getIndustry)  return view('coming-soon');

        return view('pages.all_industry', compact('getIndustry', 'menu'));
    }
 
    public function resources()
    {

        $resources = Resource::where('status', true)->orderBy('order_index')->get();
        return view('pages.resources', compact('resources'));
    }
    public function insightBlogs()
    {
        $blogs = InsightBlog::where('is_active', true)->get();
        return view('pages.insight_blogs', compact('blogs'));
    }
    public function solution()
    {
        return view('pages.solution');
    }
    public function experience()
    {
        return view('pages.experience');
    }
    public function company()
    {
        return view('pages.company');
    }
    public function career(Request $request)
    {
        $query = Career::where('status', true);

        if ($request->filled('location')) {
            $query->where('location', $request->location);
        }
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        if ($request->filled('title')) {
            $query->where('title', $request->title);
        }

        $list = $query->latest()->get();
        
        // Fetch unique values for filters (always from all active jobs to show available options)
        $locations = Career::where('status', true)->distinct()->pluck('location');
        $categories = Career::where('status', true)->distinct()->pluck('category');
        $titles = Career::where('status', true)->distinct()->pluck('title');

        return view('pages.career', compact('list', 'locations', 'categories', 'titles'));
    }
    public function about()
    {
        $inclusionCards = InclusionCard::where('is_active', true)->orderBy('sort_order')->get();
        return view('pages.about', compact('inclusionCards'));
    }
    public function services()
    {
        return view('pages.services');
    }
    public function gallery()
    {
        return view('pages.gallery');
    }
    public function booking()
    {
        return view('pages.booking');
    }
    public function blog()
    {
        return view('pages.blogs');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function productsUpdate()
    {
        $products = Product::where('is_active', true)->orderBy('created_at', 'desc')->get();
        return view('pages.products_update', compact('products'));
    }
    public function faq()
    {
        $faqs = Faq::where('is_active', true)
            ->orderBy('faq_type', 'asc')
            ->orderBy('created_at', 'asc')
            ->get()
            ->groupBy('faq_type');

        return view('pages.faq', compact('faqs'));
    }
    public function media()
    {
        return view('pages.media');
    }

    public function privacyPolicy()
    {
        // return view('pages.privacy-policy');
        return view('coming-soon');
    }
    public function termsConditions()
    {
        // return view('pages.terms-conditions');
        return view('coming-soon');
    }
    public function refundPolicy()
    {
        // return view('pages.refund-policy');
        return view('coming-soon');
    }
}
