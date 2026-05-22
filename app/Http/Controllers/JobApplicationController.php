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
            'career_id'  => 'required|exists:careers,id',
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'education'  => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'phone'      => 'required|string|max:20',
            'state'      => 'required|string|max:255',
            'district'   => 'required|string|max:255',
            'resume'     => 'required|file|mimes:pdf,doc,docx,jpg,png|max:5120', // Max 5MB
            'message'    => 'nullable|string',
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
    public function index(Request $request)
    {
        $query = JobApplication::with('career');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        if ($request->filled('career_id')) {
            $query->where('career_id', $request->career_id);
        }

        $applications = $query->latest()->paginate(10);
        $careers = Career::all();
        
        return view('admin.job_applications.index', compact('applications', 'careers'));
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
