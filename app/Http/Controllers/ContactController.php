<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
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
}
