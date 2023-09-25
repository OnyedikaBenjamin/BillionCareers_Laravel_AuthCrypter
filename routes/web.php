<?php

use App\Models\Listing;
use Psy\Command\WhereamiCommand;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use Illuminate\Tests\Integration\Database\EloquentModelDateCastingTest\EloquentModelImmutableDateCastingTest;

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

//LISTINGS ROUTE
Route::get('/', [ListingController::class, 'showAllListing']);

Route::get('/listings/{id}', [ListingController::class, 'showSingleListing']);

Route::get('/create', [ListingController::class, 'createListing']);

Route::post('/listings', [ListingController::class, 'storeListing']);

Route::get('/jobcreated', [ListingController::class, 'jobPostSuccessful']);

Route::get('/jobupdated', [ListingController::class, 'jobPostUpdated']);

Route::get('listings/{listing}/edit', [ListingController::class, 'editListing']);

Route::put('listings/{listing}', [ListingController::class, 'updateListing']);

Route::delete('listings/{listing}', [ListingController::class, 'deleteListing']);

// USER ROUTES

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'createUser']);



// Route::get('/giging', function(){
//     return response('<h1>Omo today na giging oo</h1>');
// });

// Route::get('/posts/{id}', function($id){
//     return response('Post' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return $request->name . ' ' . $request->id;
// });