<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Resource;
use App\Models\InsightBlog;
use App\Models\Product;
use App\Models\Faq;
use App\Models\InclusionCard;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function industry()
    {
        return view('pages.industry');
    }
    public function highTechIndustry()
    {
        return view('pages.high_tech_industry');
    }
    public function healthcare()
    {
        return view('pages.healthcare');
    }
    public function retail()
    {
        return view('pages.retail');
    }
    public function travel()
    {
        return view('pages.travel');
    }
    public function banking()
    {
        return view('pages.banking');
    }
    public function manufacturing()
    {
        return view('pages.manufacturing');
    }
    public function education()
    {
        return view('pages.education');
    }
    public function logistics()
    {
        return view('pages.logistics');
    }
    public function publicSector()
    {
        return view('pages.public_sector');
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
    public function career()
    {
        $list = [
            (object) [
                'location' => 'Kolkata',
                'date' => '05 Mar 2026',
                'details' => 'Laravel Developer',
                'category' => 'IT / Software',
                'department' => 'Development',
                'position_left' => 3
            ],
            (object) [
                'location' => 'Bangalore',
                'date' => '02 Mar 2026',
                'details' => 'PHP Backend Developer',
                'category' => 'IT / Software',
                'department' => 'Backend',
                'position_left' => 2
            ],
            (object) [
                'location' => 'Remote',
                'date' => '01 Mar 2026',
                'details' => 'Frontend Developer',
                'category' => 'Web Development',
                'department' => 'Frontend',
                'position_left' => 1
            ]
        ];

        return view('pages.career', compact('list'));
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
