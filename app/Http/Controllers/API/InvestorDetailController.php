<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\InvestorDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class InvestorDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'investment';
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
    

     public function Store(Request $request)
     {
            $validator = Validator::make($request->all(), [
              

                // Validation rules for dynamicComponentData
                'dynamicComponentData.finance_institution' => 'required|string|max:255',
                'dynamicComponentData.funding-type' => 'required|string|max:255',
                'dynamicComponentData.organization_description' => 'required|string|max:255',
                'dynamicComponentData.preferred_deal_size' => 'required|string|max:255',
                'dynamicComponentData.investment_type.*' => 'required|string|max:255',
                // Add validation rules for other dynamicComponentData fields
            ]);

            if ($validator->fails()) {
                return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
            }
            return response()->json(['success' => true, 'message' => 'Registration successful'], 200);
    }

   
    public function stored(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvestorDetail  $investorDetail
     * @return \Illuminate\Http\Response
     */
    public function show(InvestorDetail $investorDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvestorDetail  $investorDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(InvestorDetail $investorDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvestorDetail  $investorDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvestorDetail $investorDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvestorDetail  $investorDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvestorDetail $investorDetail)
    {
        //
    }
}
