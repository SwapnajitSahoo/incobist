<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectInquiry;

class ProjectController extends Controller
{
     public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'subject' => 'required',
            'msg' => 'nullable'
        ]);

        ProjectInquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'subject' => $request->subject,
            'message' => $request->msg
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Project request submitted successfully'
        ]);
    }
}
