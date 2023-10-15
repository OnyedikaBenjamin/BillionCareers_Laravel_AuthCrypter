<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\SavedJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SavedJobController extends Controller
{
    public function store_saved_jobs(Request $request)
    {
        $jobToSave = SavedJob::create([
            'role' => $request->role,
            'listing_id' => $request->listing_id,
            'user_id' => $request->user_id,
            'location' => $request->location,
            'job_type' => $request->job_type,
            'description' => $request->description,
            'salary_range' => $request->salary_range,
            'yearly_salary' => $request->yearly_salary,
            'no_vacancy' => $request->no_vacancy,
            'company' => $request->company,
            'email' => $request->email,
            'company_description' => $request->company_description,
            'website' => $request->website,
            'logo' => $request->logo,
        ]);

        $singleListing = Listing::find($request->listing_id);

        $foundMatchingListing = SavedJob::where('listing_id', $request->listing_id)
        ->where('user_id', auth()->id())
        ->count()>0;
        
        $relatedJobs = Listing::where('category', $singleListing->category)
        ->where('id', '!=','$id')
        ->take(4)->get();

        if($jobToSave && $singleListing){
            return view('singleListing', compact('singleListing', 'foundMatchingListing', 'relatedJobs'));
        }


    }
}
