<?php

namespace App\Http\Controllers;

use App\Models\InsightBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class InsightBlogController extends Controller
{
    public function index()
    {
        $blogs = InsightBlog::latest()->get();
        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'content' => 'nullable|string',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if (!file_exists(public_path('uploads/blogs'))) {
                mkdir(public_path('uploads/blogs'), 0755, true);
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/blogs'), $imageName);
            $data['image'] = 'uploads/blogs/' . $imageName;
        }

        $data['slug'] = Str::slug($request->name);
        $data['is_active'] = $request->boolean('is_active');

        InsightBlog::create($data);

        return redirect()->route('admin.insight-blogs.index')
                         ->with('success', 'Blog created successfully.');
    }

    public function edit($id)
    {
        $blog = InsightBlog::findOrFail($id);
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'content' => 'nullable|string',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $blog = InsightBlog::findOrFail($id);
        $data = $request->except('image');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($blog->image && file_exists(public_path($blog->image))) {
                @unlink(public_path($blog->image));
            }
            if (!file_exists(public_path('uploads/blogs'))) {
                mkdir(public_path('uploads/blogs'), 0755, true);
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/blogs'), $imageName);
            $data['image'] = 'uploads/blogs/' . $imageName;
        }

        $data['slug'] = Str::slug($request->name);
        $data['is_active'] = $request->boolean('is_active');

        $blog->update($data);

        return redirect()->route('admin.insight-blogs.index')
                         ->with('success', 'Blog updated successfully.');
    }

    public function destroy($id)
    {
        $blog = InsightBlog::findOrFail($id);
        if ($blog->image && file_exists(public_path($blog->image))) {
            @unlink(public_path($blog->image));
        }
        $blog->delete();

        return redirect()->route('admin.insight-blogs.index')
                         ->with('success', 'Blog deleted successfully.');
    }
}
