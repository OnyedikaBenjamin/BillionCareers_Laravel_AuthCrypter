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
            'password'=> ['required, confirmed, min:6'],
        ]
        );
        $formfields['password'] = bcrypt($formfields['password']);

        $user = User::create($formfields);
    }
}
