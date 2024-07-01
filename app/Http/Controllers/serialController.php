<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serialController extends Controller
{
   
    public function index()
    {
        return view ('serial'); 
    }
}
