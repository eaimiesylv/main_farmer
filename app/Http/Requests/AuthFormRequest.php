<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;


class AuthFormRequest extends FormRequest
{
    public function rules(): array
    {
         return [
                    'email' => 'required|email|max:55|exists:users',
                ];
     }
        
     public function messages(): array
     {
         return [
             'email.exists' => 'Invalid Credentials',
         ];
     }  
    
}
