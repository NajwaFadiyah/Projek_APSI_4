<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dramaController extends Controller
{
    public function index ()
    {
        return view('genreAction');
    }
}
