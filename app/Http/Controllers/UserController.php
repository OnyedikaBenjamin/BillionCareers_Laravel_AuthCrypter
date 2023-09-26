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
}

@auth
      <li>
        <span class="font-bold uppercase">
          Welcome {{auth()->user()->name}}
        </span>
      </li>
      <li>
        <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Listings</a>
      </li>
      <li>
        <form class="inline" method="POST" action="/logout">
          @csrf
          <button type="submit">
            <i class="fa-solid fa-door-closed"></i> Logout
          </button>
        </form>
      </li>
      @else
      <li>
        <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
      </li>
      <li>
        <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
      </li>
      @endauth
