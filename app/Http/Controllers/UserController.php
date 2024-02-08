<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register(){
        return view('register');
    }
    public function createUser(Request $request){
        $formfields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password'=> ['required', 'confirmed', 'min:6'],
        ]
        );
        $formfields['password'] = bcrypt($formfields['password']);
        $user = User::create($formfields);
        auth()->login($user);
        
        return redirect('/')->with('message', 'Account created successfully');
    }
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function login(){
        return view('login');
    }
    public function authenticate_user(Request $request){
        $formfields = $request->validate([
            'email' => ['required', 'email'],
            'password'=> 'required'
        ]
        );
        if(auth()->attempt($formfields)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
    public function savedJobs()
    {
        return $this->belongsToMany(Listing::class, 'saved_job_user', 'user_id', 'job_id')->withTimestamps();
    }
}

