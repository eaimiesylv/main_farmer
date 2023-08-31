<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Http\Requests\AuthFormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; 

//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function login(Request $request){
             
         $user = \App\Models\User::where('email', $request->email)->first();
          
         if(!$user){
           return response()->apiResponse('errors','User not found',null,401);
         }
         
         //return [$request->password, $user->password];
         if(!Hash::check($request->password,$user->password)){
              
              
              return response()->apiResponse('errors','Wrong Credentials',null,500);
         } 
         $user->load(['agricbusiness_detail', 'investor_detail']);
         Auth::login($user);
        // protected $redirectTo = RouteServiceProvider::HOME;
        return redirect()->route('dashboard');

    }
    public function logout(){
        
        Auth::logout();
        return redirect('/login');
    }

    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
