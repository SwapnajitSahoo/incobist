<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of contacts (Admin).
     */
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Store a newly created contact (Frontend).
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required'
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Contact form submitted successfully'
        ]);
    }

    /**
     * Remove the specified contact from storage (Admin).
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.contacts.index')->with('success', 'Contact inquiry deleted successfully.');
    }
}
