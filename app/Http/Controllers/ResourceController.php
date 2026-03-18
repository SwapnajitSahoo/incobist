<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resources = Resource::orderBy('order_index')->get();
        return view('admin.resources.index', compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.resources.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category'          => 'nullable|string',
            'title'             => 'required|string',
            'description'       => 'nullable|string',
            'hover_category'    => 'nullable|string',
            'hover_description' => 'required|string',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status'            => 'required|boolean',
            'order_index'       => 'nullable|integer',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('asset/image/resources'), $imageName);
            $validatedData['image'] = 'asset/image/resources/' . $imageName;
        }

        Resource::create($validatedData);

        return redirect()->route('admin.resources.index')->with('success', 'Resource created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $resource = Resource::findOrFail($id);
        return view('admin.resources.edit', compact('resource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $resource = Resource::findOrFail($id);

        $validatedData = $request->validate([
            'category'          => 'nullable|string',
            'title'             => 'required|string',
            'description'       => 'nullable|string',
            'hover_category'    => 'nullable|string',
            'hover_description' => 'required|string',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status'            => 'required|boolean',
            'order_index'       => 'nullable|integer',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($resource->image && File::exists(public_path($resource->image))) {
                File::delete(public_path($resource->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('asset/image/resources'), $imageName);
            $validatedData['image'] = 'asset/image/resources/' . $imageName;
        }

        $resource->update($validatedData);

        return redirect()->route('admin.resources.index')->with('success', 'Resource updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $resource = Resource::findOrFail($id);

        // Delete image
        if ($resource->image && File::exists(public_path($resource->image))) {
            File::delete(public_path($resource->image));
        }

        $resource->delete();

        return redirect()->route('admin.resources.index')->with('success', 'Resource deleted successfully.');
    }
}
