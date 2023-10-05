<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SavedJob;
use Illuminate\Http\Request;

class SavedJobController extends Controller
{
    public function store_saved_jobs(Request $request)
    {
        $jobToSave = SavedJob::create([
            'role' => $request->role,
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

        if($jobToSave)
        // if ($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        $formFields['user_id'] = auth()->id();  // maps the user creating the post to the post

        Listing::create($formFields);
        return redirect('/jobcreated');
    }
}
