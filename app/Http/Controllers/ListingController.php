<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\SavedJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    // public function showAllListing(){
    //     return view('listings', [
    //         'listings' => Listing::all()
    //     ]);}
    // public function showAllListing(){
    //     $listings = Listing::paginate();

    //     return view('listings', compact('listings'));
    // }

    public function go_home(){
        return view('home');
    }
    public function showAllListing()
    {
        $listings = Listing::select()->take(4)->orderby('id', 'desc')->get();
        $total_listings = Listing::all()->count(); 
        return view('listings', compact('listings', 'total_listings'));
    }

    public function showSingleListing($id)
    {
        
    }

    public function createListing()
    {
        return view('create');
    }

    public function jobPostSuccessful()
    {
        return view('successful-post');
    }
    public function jobPostUpdated()
    {
        return view('jobupdated');
    }

    public function storeListing(Request $request)
    {
        // dd($request ->file('logo'));
        $formFields = $request->validate([
            'role' => 'required',
            'location' => 'required',
            'job_type' => 'required',
            'description' => 'required',
            'salary_range' => 'required',
            'yearly_salary' => 'required',
            'no_vacancy' => 'required',
            'company' => 'required',
            'email' => ['required', 'email'],
            'company_description' => 'required',
            'website' => 'required',
            'logo' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();  // maps the user creating the post to the post

        Listing::create($formFields);
        return redirect('/jobcreated');
    }
    public function editListing(Listing $listing)
    {
            return view('edit', ['fetchedListing' => $listing]);
    }

    public function updateListing(Request $request, Listing $listing){
        if($listing->user_id != auth()->id()) {   // Make sure logged in user is owner
            abort(403, 'Unauthorized Action');
        }
        $formFields = $request->validate([
            'role' => 'required',
            'location' => 'required',
            'job_type' => 'required',
            'category' => 'required',
            'description' => 'required',
            'salary_range' => 'required',
            'yearly_salary' => 'required',
            'no_vacancy' => 'required',
            'company' => 'required',
            'email' => ['required', 'email'],
            'company_description' => 'required',
            'website' => 'required',
            'logo' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');}
        $listing->update($formFields);
        return redirect('/jobupdated');
    }
    public function deleteListing(Listing $listing){
        if($listing->user_id != auth()->id()) {   // Make sure logged in user is owner
            abort(403, 'Unauthorized Action');}
         $listing->delete();  
         return redirect('/');
    }
    public function manageListing(){
        return view('managelisting',  ['listings' => auth()->user()->listings()->get()]);
    }

    public function showRelatedJobs($id){
        $listing = Listing::find($id);

        $relatedJobs = Listing::where('category', $listing->category)
        ->where('id', '!=','$id')->take(4)->get();

        return $relatedJobs;
    }
}