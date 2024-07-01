<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filmController extends Controller
{
    public function index()
    {
        return view ('film'); 
    }
}
