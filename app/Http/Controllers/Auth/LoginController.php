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
    public function store(Request $request)
    {
        $user = \App\Models\User::where('email', $request->email)->first();
    
        if (!$user) {
            return response()->json(['error' => 'User not found.'], 401);
        }
    
        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Wrong credential'], 403);
        }
    
        Auth::login($user);
    
        $token = $user->createToken('api-token')->plainTextToken;
        $user = $user->load(['agricbusiness_detail', 'investor_detail']);
        session(['token' => $token]);
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
