<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
  
    public function register(){
        return view('register');
    }

//     public function createUser(User $user){
//     }
}
