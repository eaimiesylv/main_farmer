<?php
namespace App\Repository;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Events\WelcomeEmailSent;

class UserRepository
{
   
    
    //Handles Franchisee Onboarding
    public function franchisee_onboarding($submittedUserData)
    {
        

        DB::beginTransaction();
            //step 1: select franchisee email from invitation table
            $userInvitationDetail = $this->invitationDetail($submittedUserData);
            //step 2: create franchisee
            $userData =$this->createNewUser($submittedUserData);
            //step 3:update franchisee detail base on the invitation table value of step 1
            $this->update_invitation_email_verifield_field($userInvitationDetail);
            
        DB::commit();
        
        return $userData;
    }

    // Handles Retail Customer Onboarding
    public function retail_customer_onboarding($submittedUserData){
        $retailCustomerDetail=$this->createNewUser($submittedUserData);
        event(new WelcomeEmailSent($retailCustomerDetail," ","retail_customer"));
        return response()->apiResponse('Success','Email sent successfully', $retailCustomerDetail,200);
    }

    //Returns User invitation detail. This is needed in the franchisee onboarding
    private function invitationDetail($request){
        
        return  \App\Models\Invitation::where('email',$request['email'])->select('franchisee_id','type','email')->first();
    }

    // Creates New user Record
    public function createNewUser($submittedUserData){
        $filteredUserData = collect($submittedUserData)->except(['password_confirmation', 'assert_id']);
        return \App\Models\User::create($filteredUserData->toArray());
        
    }

    // Update franchisee email_verified on the Invitation table
    private function update_invitation_email_verifield_field($userInvitationDetail){
       
        \App\Models\Invitation::where('email', $userInvitationDetail->email)->update([
            'email_verified_at' => Carbon::now()
        ]);
        \App\Models\User::where('email', $userInvitationDetail->email)->update([
            'email_verified_at' => Carbon::now()
        ]);
    }

   

}
