<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;



Route::get('/login', function () {
    return view('welcome');
});
Route::post('login', 'Auth\LoginController@login');

Route::get('/register', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('dashboard');
});

Route::fallback(function () {
    return redirect('/'); // Redirect to the home page
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');