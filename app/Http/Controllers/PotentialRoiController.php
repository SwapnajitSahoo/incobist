<?php

namespace App\Http\Controllers;

use App\Models\PotentialRoi;
use Illuminate\Http\Request;

class PotentialRoiController extends Controller
{
    /**
     * Display a listing of Potential ROI inquiries (Admin).
     */
    public function index()
    {
        $rois = PotentialRoi::latest()->get();
        return view('admin.roi.index', compact('rois'));
    }

    /**
     * Store a newly created Potential ROI inquiry (Frontend).
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'industry'       => 'nullable|string',
            'budget'         => 'nullable|string',
            'goal'           => 'nullable|string',
            'business_stage' => 'nullable|string',
            'timeline'       => 'nullable|string',
        ]);

        PotentialRoi::create($validatedData);

        return response()->json([
            'status' => true,
            'message' => 'ROI inquiry submitted successfully'
        ]);
    }

    /**
     * Remove the specified ROI inquiry from storage (Admin).
     */
    public function destroy($id)
    {
        $roi = PotentialRoi::findOrFail($id);
        $roi->delete();

        return redirect()->route('admin.roi.index')->with('success', 'ROI inquiry deleted successfully.');
    }
}
