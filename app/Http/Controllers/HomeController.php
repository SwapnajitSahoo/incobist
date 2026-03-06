<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('pages.resources');
    }
    public function insightBlogs()
    {
        return view('pages.insight_blogs');
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
        (object)[
            'location' => 'Kolkata',
            'date' => '05 Mar 2026',
            'details' => 'Laravel Developer',
            'category' => 'IT / Software',
            'department' => 'Development',
            'position_left' => 3
        ],
        (object)[
            'location' => 'Bangalore',
            'date' => '02 Mar 2026',
            'details' => 'PHP Backend Developer',
            'category' => 'IT / Software',
            'department' => 'Backend',
            'position_left' => 2
        ],
        (object)[
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
        return view('pages.about');
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
        return view('pages.products_update');
    }
    public function faq()
    {
        return view('pages.faq');
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
