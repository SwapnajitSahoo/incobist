<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'heading' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if (!file_exists(public_path('uploads/products'))) {
                mkdir(public_path('uploads/products'), 0755, true);
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/products'), $imageName);
            $data['image'] = 'uploads/products/' . $imageName;
        }

        $data['slug'] = Str::slug($request->name);
        $data['is_active'] = $request->boolean('is_active');

        Product::create($data);

        return redirect()->route('admin.products.index')
                         ->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'heading' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if ($product->image && file_exists(public_path($product->image))) {
                @unlink(public_path($product->image));
            }
            if (!file_exists(public_path('uploads/products'))) {
                mkdir(public_path('uploads/products'), 0755, true);
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/products'), $imageName);
            $data['image'] = 'uploads/products/' . $imageName;
        }

        $data['slug'] = Str::slug($request->name);
        $data['is_active'] = $request->boolean('is_active');

        $product->update($data);

        return redirect()->route('admin.products.index')
                         ->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image && file_exists(public_path($product->image))) {
            @unlink(public_path($product->image));
        }
        $product->delete();

        return redirect()->route('admin.products.index')
                         ->with('success', 'Product deleted successfully.');
    }
}
