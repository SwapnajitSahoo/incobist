<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::latest()->get();
        return view('faq.index', compact('faqs'));
    }

    public function create()
    {
        return view('faq.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'faq_type' => 'required|in:corporate,shares',
            'question' => 'required|string',
            'answer'   => 'required|string',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->boolean('is_active');

        Faq::create($data);

        return redirect()->route('admin.faqs.index')
                         ->with('success', 'FAQ created successfully.');
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('faq.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'faq_type' => 'required|in:corporate,shares',
            'question' => 'required|string',
            'answer'   => 'required|string',
        ]);

        $faq = Faq::findOrFail($id);
        $data = $request->all();
        $data['is_active'] = $request->boolean('is_active');

        $faq->update($data);

        return redirect()->route('admin.faqs.index')
                         ->with('success', 'FAQ updated successfully.');
    }

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return redirect()->route('admin.faqs.index')
                         ->with('success', 'FAQ deleted successfully.');
    }
}
