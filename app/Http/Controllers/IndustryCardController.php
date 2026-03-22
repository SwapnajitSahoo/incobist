<?php

namespace App\Http\Controllers;

use App\Models\IncoIndustry;
use App\Models\IncoIndustryCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndustryCardController extends Controller
{
     protected array $types = ['serve', 'focus', 'service','capable'];
 
    public function index($industry_id)
    {
        $industry = IncoIndustry::findOrFail($industry_id);
        $cards    = IncoIndustryCard::where('industry_id', $industry_id)
            ->latest()
            ->paginate(10);
 
        return view('admin.industry.cards.index', compact('industry', 'cards'));
    }
 
    public function create($industry_id)
    {
        $industry = IncoIndustry::findOrFail($industry_id);
        $types    = $this->types;
 
        return view('admin.industry.cards.create', compact('industry', 'types'));
    }
 
    public function store(Request $request, $industry_id)
    {
        IncoIndustry::findOrFail($industry_id);
 
        $request->validate([
            'img'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title'     => 'nullable|string|max:255',
            'subtitle'  => 'nullable|string|max:255',
            'desc'      => 'nullable|string',
            'card_link' => 'nullable|url|max:255',
            'type'      => 'nullable|in:serve,focus,service,capable',
        ]);
 
        $data                = $request->except(['img', '_token']);
        $data['industry_id'] = $industry_id;
        $data['is_active']   = $request->has('is_active') ? 1 : 0;
 
        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('industry/cards', 'public');
        }
 
        IncoIndustryCard::create($data);
 
        return redirect()->route('admin.industry.cards.index', $industry_id)
            ->with('success', 'Card created successfully.');
    }
 
    public function edit($industry_id, $id)
    {
        $industry = IncoIndustry::findOrFail($industry_id);
        $card     = IncoIndustryCard::where('industry_id', $industry_id)->findOrFail($id);
        $types    = $this->types;
 
        return view('admin.industry.cards.edit', compact('industry', 'card', 'types'));
    }
 
    public function update(Request $request, $industry_id, $id)
    {
        IncoIndustry::findOrFail($industry_id);
        $card = IncoIndustryCard::where('industry_id', $industry_id)->findOrFail($id);
 
        $request->validate([
            'img'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title'     => 'nullable|string|max:255',
            'subtitle'  => 'nullable|string|max:255',
            'desc'      => 'nullable|string',
            'card_link' => 'nullable|url|max:255',
            'type'      => 'nullable|in:serve,focus,service,capable',
        ]);
 
        $data              = $request->except(['img', '_token']);
        $data['is_active'] = $request->has('is_active') ? 1 : 0;
 
        if ($request->hasFile('img')) {
            if ($card->img) {
                Storage::disk('public')->delete($card->img);
            }
            $data['img'] = $request->file('img')->store('industry/cards', 'public');
        }
 
        $card->update($data);
 
        return redirect()->route('admin.industry.cards.index', $industry_id)
            ->with('success', 'Card updated successfully.');
    }
 
    public function destroy($industry_id, $id)
    {
        IncoIndustry::findOrFail($industry_id);
        $card = IncoIndustryCard::where('industry_id', $industry_id)->findOrFail($id);
 
        if ($card->img) {
            Storage::disk('public')->delete($card->img);
        }
 
        $card->delete();
 
        return redirect()->route('admin.industry.cards.index', $industry_id)
            ->with('success', 'Card deleted successfully.');
    }
}
