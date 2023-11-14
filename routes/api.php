<?php

use App\Http\Controllers\Api\CommunicationEmailController;
use App\Http\Controllers\Api\CommunicationSmsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::resource('investor_detail', App\Http\Controllers\API\InvestorDetailController::class);
Route::resource('agric_business_detail', App\Http\Controllers\API\AgricBusinessController::class);
Route::resource('user', App\Http\Controllers\API\UserApiController::class);
