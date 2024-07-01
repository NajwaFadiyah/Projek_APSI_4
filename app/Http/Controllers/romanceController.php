<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class romanceController extends Controller
{
    public function index ()
    {
        return view('genreRomance');
    }
}
