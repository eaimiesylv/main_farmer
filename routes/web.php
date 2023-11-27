<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;



Route::get('/login', function () {
   
    return view('welcome');

})->name('login');

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class,'store']);


Route::get('/register', function () { 
    
    return view('welcome');
});
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/pitch', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index']);
//displays the dashboard
// Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
// Route::get('/pitch', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
// Route::get('/create_pitch', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/not-found', function(){
    dd("route not found");
});
Route::fallback(function () { return redirect('/not-found');});
//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');