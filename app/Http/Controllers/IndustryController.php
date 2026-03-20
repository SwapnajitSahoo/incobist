<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\IndustryCard;
use App\Models\IndustryService;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
     public function index()
    {
        $industries = Industry::with('cards','services')->latest()->get();
        return view('admin.industry.index', compact('industries'));
    }

    public function create()
    {
        return view('admin.industry.create');
    }

    public function store(Request $request)
    {
        $industry = Industry::create($request->all());

        // Cards
        if ($request->card_title) {
            foreach ($request->card_title as $key => $value) {
                IndustryCard::create([
                    'industry_id' => $industry->id,
                    'card_img' => $request->card_img[$key] ?? null,
                    'card_title' => $value,
                    'card_subtitle' => $request->card_subtitle[$key] ?? null,
                    'card_description' => $request->card_description[$key] ?? null,
                ]);
            }
        }

        // Services
        if ($request->service_card_title) {
            foreach ($request->service_card_title as $key => $value) {
                IndustryService::create([
                    'industry_id' => $industry->id,
                    'service_card_img' => $request->service_card_img[$key] ?? null,
                    'service_card_title' => $value,
                    'service_card_desc' => $request->service_card_desc[$key] ?? null,
                ]);
            }
        }

        return redirect()->route('admin.industry.index');
    }

    public function edit($id)
    {
        $industry = Industry::with('cards','services')->findOrFail($id);
        return view('admin.industry.edit', compact('industry'));
    }

    public function update(Request $request, $id)
    {
        $industry = Industry::findOrFail($id);
        $industry->update($request->all());

        // delete old
        $industry->cards()->delete();
        $industry->services()->delete();

        // re-insert
        foreach ($request->card_title as $key => $value) {
            IndustryCard::create([
                'industry_id' => $industry->id,
                'card_img' => $request->card_img[$key] ?? null,
                'card_title' => $value,
                'card_subtitle' => $request->card_subtitle[$key] ?? null,
                'card_description' => $request->card_description[$key] ?? null,
            ]);
        }

        foreach ($request->service_card_title as $key => $value) {
            IndustryService::create([
                'industry_id' => $industry->id,
                'service_card_img' => $request->service_card_img[$key] ?? null,
                'service_card_title' => $value,
                'service_card_desc' => $request->service_card_desc[$key] ?? null,
            ]);
        }

        return redirect()->route('admin.industry.index');
    }

    public function destroy($id)
    {
        Industry::findOrFail($id)->delete();
        return back();
    }
}
