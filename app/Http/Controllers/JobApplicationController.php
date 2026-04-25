<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class JobApplicationController extends Controller
{
    /**
     * Store a newly created application in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'career_id' => 'required|exists:careers,id',
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'phone'     => 'nullable|string|max:20',
            'resume'    => 'required|file|mimes:pdf,doc,docx|max:5120', // Max 5MB
            'message'   => 'nullable|string',
        ]);

        if ($request->hasFile('resume')) {
            $fileName = time() . '_' . $request->file('resume')->getClientOriginalName();
            $request->file('resume')->move(public_path('uploads/resumes'), $fileName);
            $validatedData['resume'] = 'uploads/resumes/' . $fileName;
        }

        JobApplication::create($validatedData);

        return back()->with('success', 'Your application has been submitted successfully!');
    }

    /**
     * Display a listing of applications for admin.
     */
    public function index()
    {
        $applications = JobApplication::with('career')->latest()->get();
        // dd($applications);
        return view('admin.job_applications.index', compact('applications'));
    }

    /**
     * Update application status.
     */
    public function updateStatus(Request $request, $id)
    {
        $application = JobApplication::findOrFail($id);
        $application->update(['status' => $request->status]);

        return back()->with('success', 'Application status updated.');
    }

    /**
     * Remove the specified application from storage.
     */
    public function destroy($id)
    {
        $application = JobApplication::findOrFail($id);
        
        // Delete resume file
        if ($application->resume && File::exists(public_path($application->resume))) {
            File::delete(public_path($application->resume));
        }

        $application->delete();

        return back()->with('success', 'Application deleted successfully.');
    }
}
