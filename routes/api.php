<?php

use App\Http\Controllers\Api\CommunicationEmailController;
use App\Http\Controllers\Api\CommunicationSmsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::resource('investor_detail', App\Http\Controllers\API\InvestorDetailController::class);
Route::resource('agric_business_detail', App\Http\Controllers\API\AgricBusinessController::class);
Route::resource('user', App\Http\Controllers\API\UserApiController::class);
// Unprotected routes
/*
Route::group(['prefix' => 'v1/user', 'as' => 'user.v1.'], function () {
  
    Route::post('/resend_invitation', [App\Http\Controllers\Users\UserInvitationController::class, 'resend']);
    Route::post('/login', [App\Http\Controllers\Users\AuthController::class, 'login'])->name('login');
    Route::post('/register', [App\Http\Controllers\Users\UserController::class, 'store']);
    Route::get('/send_invitation/{invitation}', [App\Http\Controllers\Users\UserInvitationController::class, 'confirm_invitation_token']);
});

//protected route
Route::middleware('auth:sanctum')->group(function () {
    Route::group(['prefix' => 'v1/user', 'as' => 'user.v1.'], function () {
        Route::resource('/send_invitation', App\Http\Controllers\Users\UserInvitationController::class)->except(['update']);//un protects the update method
    });
     Route::group(['prefix'=>'v1/customer','as'=> 'customer.v1.'],function(){
        Route::resource('customers_onboardings', App\Http\Controllers\Customers\CustomerOnboardController::class);
    });
    Route::group(['prefix'=>'v1/franchisee', 'as'=>'franchisee.v1.'], function(){
        Route::resource('franchisees_onboardings', App\Http\Controllers\Franchisee\FranchiseeOnboardController::class);
    });
    Route::group(['prefix'=>'v1/agent','as'=>'agent.v1.'],function(){
        Route::resource('agents_onboardings', App\Http\Controllers\Agent\FranchiseeAgentOnboardController::class);
    });
   
   
    
});*/
/*
 * API Version 2
 */
// Reserved for future use