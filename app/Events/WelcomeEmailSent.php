<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmailSent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $userDetail;
    public $resendHash;
    public $sendType;
    /** 
     *  user detail represent franchisee or retail customer detail
     *  sendType is either retail_customer or null for default
     */
    public function __construct($user_detail,$resendHash=null,$sendType=null)
    {
       
        //these are the details are received from the controller and sent to the listeners
        $this->userDetail = $user_detail;
        $this->resendHash = $resendHash;
        $this->sendType = $sendType;
      
      
       
    }


}
