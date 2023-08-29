<?php
namespace App\Services;
use Illuminate\Support\Carbon;

class TimeIntervalService
{
	//The time(@sent_at)  the msg was delivered, and the duration(@duration) it will expire
	public $expiration_minutes = 15;
    public function calculateTimeDifference($sent_at, $duration)
    {
        $sent_at = Carbon::parse($sent_at);
        $expiry_time = $sent_at->copy()->addMinutes($duration);
		//check if msg time is still valid
		if (Carbon::now()->lessThan($expiry_time)) {
			return "valid";
			
		} 
		//return [true,"current time"=>Carbon::now(), "expiry_time"=>$expiry_time];
		return "expired";
    }
	
}
?>