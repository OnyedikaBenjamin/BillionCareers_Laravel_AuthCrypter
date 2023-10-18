<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function application_page(){
        return view('applyforjob');
    }

    
}
