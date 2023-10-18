<?php

use App\Http\Controllers\JobApplicationController;
use App\Models\Listing;
use Psy\Command\WhereamiCommand;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\SavedJobController;

//LISTINGS ROUTE
Route::get('/', [ListingController::class, 'go_home']);
Route::get('/listings', [ListingController::class, 'showAllListing']);

Route::get('/listings/{id}', [ListingController::class, 'showSingleListing'])->name('single.job');

Route::get('/create', [ListingController::class, 'createListing'])->middleware('auth');

Route::post('/listings', [ListingController::class, 'storeListing'])->middleware('auth');

Route::get('/jobcreated', [ListingController::class, 'jobPostSuccessful']);

Route::get('/jobupdated', [ListingController::class, 'jobPostUpdated']);

Route::get('listings/{listing}/edit', [ListingController::class, 'editListing'])->middleware('auth');

Route::put('listings/{listing}', [ListingController::class, 'updateListing'])->middleware('auth');

Route::delete('listings/{listing}', [ListingController::class, 'deleteListing'])->middleware('auth');

// USER ROUTES

Route::get('users/register', [UserController::class, 'register'])->middleware('guest');;
Route::post('users/register', [UserController::class, 'createUser']);


Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/users/login', [UserController::class, 'login'])->middleware('guest');;
Route::post('/users/authenticate', [UserController::class, 'authenticate_user']);

Route::get('/manage', [ListingController::class, 'manageListing']);



Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');


Route::post('/savedjobs/create', [SavedJobController::class, 'store_saved_jobs']);

Route::get('job/apply', [JobApplicationController::class, 'store_saved_jobs']);
Route::get('job/', [JobApplicationController::class, 'store_saved_jobs']);

// Route::get('/giging', function(){
//     return response('<h1>Omo today na giging oo</h1>');
// });

// Route::get('/posts/{id}', function($id){
//     return response('Post' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return $request->name . ' ' . $request->id;
// });