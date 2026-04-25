<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::latest()->get();
        return view('admin.careers.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.careers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:255',
            'location'    => 'required|string|max:255',
            'type'        => 'nullable|string|max:255',
            'positions'   => 'required|integer|min:1',
            'description' => 'nullable|string',
            'status'      => 'required|boolean',
            'posted_at'   => 'nullable|date',
        ]);

        Career::create($validatedData);

        return redirect()->route('admin.careers.index')->with('success', 'Career listing created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $career = Career::findOrFail($id);
        return view('admin.careers.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $career = Career::findOrFail($id);

        $validatedData = $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:255',
            'location'    => 'required|string|max:255',
            'type'        => 'nullable|string|max:255',
            'positions'   => 'required|integer|min:1',
            'description' => 'nullable|string',
            'status'      => 'required|boolean',
            'posted_at'   => 'nullable|date',
        ]);

        $career->update($validatedData);

        return redirect()->route('admin.careers.index')->with('success', 'Career listing updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $career = Career::findOrFail($id);
        $career->delete();

        return redirect()->route('admin.careers.index')->with('success', 'Career listing deleted successfully.');
    }
}
