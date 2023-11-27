<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Models\AgricBusiness;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AgricBusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'agric business';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    

        public function store(Request $request)
        {
            $validator = Validator::make($request->all(), [
             
                'dynamicComponentData.dealDescription' => 'required|string|max:255',
                'dynamicComponentData.dealName' => 'required|string|max:255',
                'dynamicComponentData.dealPromoters' => 'required|string|max:255',
                'dynamicComponentData.focalStates' => 'required|string|max:255',
                'dynamicComponentData.hasBusinessPlan' => 'required|string|in:Yes,No',
                'dynamicComponentData.organizationName' => 'required|string|max:255',
                'dynamicComponentData.preferredValueChain' => 'required|array',
                'dynamicComponentData.preferredValueChain.*' => 'required|string|max:255',
                'dynamicComponentData.purpose' => 'required|string|max:255',
                'dynamicComponentData.raiseAmount' => 'required|string|max:255',
                'dynamicComponentData.ticketSize' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
            }

            return response()->json(['success' => true, 'message' => 'Registration successful'], 200);
        }

   
    public function stored(Request $request)
    {
        return 'store';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AgricBusiness  $agricBusiness
     * @return \Illuminate\Http\Response
     */
    public function show(AgricBusiness $agricBusiness)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgricBusiness  $agricBusiness
     * @return \Illuminate\Http\Response
     */
    public function edit(AgricBusiness $agricBusiness)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AgricBusiness  $agricBusiness
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AgricBusiness $agricBusiness)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgricBusiness  $agricBusiness
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgricBusiness $agricBusiness)
    {
        //
    }
}
