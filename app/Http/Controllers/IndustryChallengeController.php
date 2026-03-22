<?php

namespace App\Http\Controllers;

use App\Models\IncoIndustry;
use App\Models\IncoIndustryCardChallenge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndustryChallengeController extends Controller
{
     public function index($industry_id)
    {
        $industry   = IncoIndustry::findOrFail($industry_id);
        $challenges = IncoIndustryCardChallenge::where('industry_id', $industry_id)
            ->latest()
            ->paginate(10);
 
        return view('admin.industry.challenges.index', compact('industry', 'challenges'));
    }
 
    public function create($industry_id)
    {
        $industry = IncoIndustry::findOrFail($industry_id);
 
        return view('admin.industry.challenges.create', compact('industry'));
    }
 
    public function store(Request $request, $industry_id)
    {
        IncoIndustry::findOrFail($industry_id);
 
        $request->validate([
            'solution_name' => 'nullable|string|max:255',
            'img'           => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title'         => 'nullable|string|max:255',
            'subtitle'      => 'nullable|string|max:255',
            'desc'          => 'nullable|string',
        ]);
 
        $data                = $request->except(['img', '_token']);
        $data['industry_id'] = $industry_id;
        $data['is_active']   = $request->has('is_active') ? 1 : 0;
 
        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('industry/challenges', 'public');
        }
 
        IncoIndustryCardChallenge::create($data);
 
        return redirect()->route('admin.industry.challenges.index', $industry_id)
            ->with('success', 'Challenge created successfully.');
    }
 
    public function edit($industry_id, $id)
    {
        $industry  = IncoIndustry::findOrFail($industry_id);
        $challenge = IncoIndustryCardChallenge::where('industry_id', $industry_id)->findOrFail($id);
 
        return view('admin.industry.challenges.edit', compact('industry', 'challenge'));
    }
 
    public function update(Request $request, $industry_id, $id)
    {
        IncoIndustry::findOrFail($industry_id);
        $challenge = IncoIndustryCardChallenge::where('industry_id', $industry_id)->findOrFail($id);
 
        $request->validate([
            'solution_name' => 'nullable|string|max:255',
            'img'           => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title'         => 'nullable|string|max:255',
            'subtitle'      => 'nullable|string|max:255',
            'desc'          => 'nullable|string',
        ]);
 
        $data              = $request->except(['img', '_token']);
        $data['is_active'] = $request->has('is_active') ? 1 : 0;
 
        if ($request->hasFile('img')) {
            if ($challenge->img) {
                Storage::disk('public')->delete($challenge->img);
            }
            $data['img'] = $request->file('img')->store('industry/challenges', 'public');
        }
 
        $challenge->update($data);
 
        return redirect()->route('admin.industry.challenges.index', $industry_id)
            ->with('success', 'Challenge updated successfully.');
    }
 
    public function destroy($industry_id, $id)
    {
        IncoIndustry::findOrFail($industry_id);
        $challenge = IncoIndustryCardChallenge::where('industry_id', $industry_id)->findOrFail($id);
 
        if ($challenge->img) {
            Storage::disk('public')->delete($challenge->img);
        }
 
        $challenge->delete();
 
        return redirect()->route('admin.industry.challenges.index', $industry_id)
            ->with('success', 'Challenge deleted successfully.');
    }
}
