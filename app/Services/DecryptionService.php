<?php
namespace App\Services;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class DecryptionService
{
    public function decryptInvitationHash($invitation)
    {
        try {
            return Crypt::decryptString($invitation);
        } catch (DecryptException $e) {
            
            return null; 
        }
    }
}
?>