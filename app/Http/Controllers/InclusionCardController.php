<?php

namespace App\Http\Controllers;

use App\Models\InclusionCard;
use Illuminate\Http\Request;

class InclusionCardController extends Controller
{
    public function index()
    {
        $cards = InclusionCard::orderBy('sort_order')->get();
        return view('admin.inclusion_cards.index', compact('cards'));
    }

    public function create()
    {
        return view('admin.inclusion_cards.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'second_content' => 'nullable|string',
        ]);

        $nextOrder = InclusionCard::max('sort_order') + 1;

        InclusionCard::create([
            'title' => $request->title,
            'content' => $request->input('content'),
            'second_content' => $request->input('second_content'),
            'is_active' => $request->boolean('is_active'),
            'sort_order' => $nextOrder,
        ]);

        return redirect()->route('admin.inclusion-cards.index')
            ->with('success', 'Inclusion card created successfully.');
    }

    public function edit($id)
    {
        $card = InclusionCard::findOrFail($id);
        return view('admin.inclusion_cards.edit', compact('card'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'second_content' => 'nullable|string',
        ]);

        $card = InclusionCard::findOrFail($id);
        $card->update([
            'title' => $request->title,
            'content' => $request->input('content'),
            'second_content' => $request->input('second_content'),
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.inclusion-cards.index')
            ->with('success', 'Inclusion card updated successfully.');
    }

    public function destroy($id)
    {
        InclusionCard::findOrFail($id)->delete();

        return redirect()->route('admin.inclusion-cards.index')
            ->with('success', 'Inclusion card deleted successfully.');
    }
}
