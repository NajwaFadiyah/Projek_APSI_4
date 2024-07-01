<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\dramaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\serialController;
use App\Http\Controllers\filmController;
use App\Http\Controllers\langgananController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\playController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\romanceController;

Route::get('/', function () {
    return view('index');
});

// Route::get('serial', function () {
//     return view('serial');
// });

// Route::get('film', function () {
//     return view('film');
// });

// Route::get('genreAction', function () {
//     return view('genreAction');
// });

// Route::get('genreRomance', function () {
//     return view('genreRomance');
// });

Route::get('/serial', [serialController::class, 'index'])->name('serial');

Route::get('/film', [filmController::class, 'index'])->name('film');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', 'AuthController@login')->name('login.post');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', 'AuthController@register')->name('register.post');

Route::post('logout', 'AuthController@logout')->name('logout');

Route::get('/drama', [dramaController::class, 'index'])->name('drama');

Route::get('/romance', [romanceController::class, 'index'])->name('romance');

Route::get('/langganan', [langgananController::class, 'index'])->name('langganan');

Route::get('/play', [playController::class, 'index'])->name('play');