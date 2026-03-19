<?php

namespace App\Http\Controllers;

use App\Models\BankingCard;
use App\Models\BankingChallenge;
use App\Models\BankingIndustry;
use App\Models\BankingService;
use Illuminate\Http\Request;

class BankingController extends Controller
{
   
      public function index()
    {
        $data = BankingIndustry::latest()->get();
        return view('admin.banking.index', compact('data'));
    }

    public function create()
    {
        return view('admin.banking.create');
    }

    public function store(Request $request)
    {
        $industry = BankingIndustry::create($request->all());

        // Cards
        foreach ($request->card_title ?? [] as $key => $val) {
            BankingCard::create([
                'industry_id' => $industry->id,
                'card_img' => $request->card_img[$key] ?? null,
                'card_title' => $val,
                'card_subtitle' => $request->card_subtitle[$key] ?? null,
                'card_description' => $request->card_description[$key] ?? null,
            ]);
        }

        // Services
        foreach ($request->service_card_title ?? [] as $key => $val) {
            BankingService::create([
                'industry_id' => $industry->id,
                'service_card_img' => $request->service_card_img[$key] ?? null,
                'service_card_title' => $val,
                'service_card_desc' => $request->service_card_desc[$key] ?? null,
            ]);
        }

        // Challenges
        foreach ($request->challenge_card_title ?? [] as $key => $val) {
            BankingChallenge::create([
                'industry_id' => $industry->id,
                'challenge_text' => $request->challenge_text[$key] ?? null,
                'challenge_card' => $request->challenge_card[$key] ?? null,
                'challenge_card_title' => $val,
                'challenge_card_subtitle' => $request->challenge_card_subtitle[$key] ?? null,
                'challenge_card_desc' => $request->challenge_card_desc[$key] ?? null,
            ]);
        }

        return redirect()->route('admin.banking.index')->with('success','Created');
    }

    public function edit($id)
    {
        $industry = BankingIndustry::with('cards','services','challenges')->findOrFail($id);
        return view('admin.banking.edit', compact('industry'));
    }

    public function update(Request $request, $id)
    {
        $industry = BankingIndustry::findOrFail($id);
        $industry->update($request->all());

        $industry->cards()->delete();
        $industry->services()->delete();
        $industry->challenges()->delete();

        // re-insert (same as store)
        $this->store($request);

        return redirect()->route('admin.banking.index')->with('success','Updated');
    }

    public function destroy($id)
    {
        BankingIndustry::findOrFail($id)->delete();
        return back()->with('success','Deleted');
    }
}
