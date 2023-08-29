<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class UserFormRequest extends FormRequest
{
    
    public function rules(Request $request): array
    {

        $type=$request->Type;
        /**
         * merge user_detail array with either franchisee_onboard or retail_customer onboard
         * base on the value of $type. franchisee is for franchisee_registration and 2 is for retail_customer
         */

        return (
                    $this->user_detail()
                )
                    + 
               (
                    ($this->type == 'franchisee') ?$this->franchisee_onboarding() : $this->retail_customer()
               );

        
    }
    protected function user_detail(){
        return [
            'franchise_id'=>'integer|nullable',
            'name' => 'required|string|max:55',
            'type'=> 'required|string|max:55|in:franchisee,retail_customer',
            'phone' => 'nullable|string|max:55|unique:users',
            'address' => 'nullable|string|max:55',
            'city' => 'nullable|string|max:55',
            'state' => 'nullable|string|max:55',
            'postal_code' => 'nullable|string|max:55',
            'country' => 'nullable|string|max:55',
            'verified_at' => 'nullable|date',
            'password' => 'required|string|confirmed|min:2|max:20',
            'status' => 'nullable|string|max:55',
            //'role_id' => 'nullable|string|max:55|in:admin,manager,employee,customer-service',
            'role_id' => 'nullable|string|max:55', 
            'avatar' => 'nullable|string|max:55',
        
        ];
    } 
    /**
     * Validation rule for franchisee registration
     */
    protected function franchisee_onboarding(){
        return[
            'email' => [
                'required',
                'email',
                'max:55',
                'unique:users',
                //check if the entered email is found in the invititation email
                Rule::exists('invitations')->where(function ($query) {
                    if ($this->has('email') && $this->has('assert_id')) {
                        $query->where('email', $this->email)
                            ->where('assert_id', $this->assert_id);
                    }
                }),
            ],
            'asset_id'=>'required|string',
          
        ];
    } 
    /**
     * Validation rule for retail_customer
     */
    protected function retail_customer(){

        return[
            'email'=>'required|email|max:55|unique:users',
        
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'The email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'The email address must not exceed :max characters.',
            'email.unique' => 'The email address is already registered.',
            'email.exists' => 'The provided assert_id value does not match the provider email address',
        ];
    }
}
