<?php
namespace App\Services;
use Illuminate\Support\Str;

class AssertId
{
	public static function generateAssetId()
    {
        return Str::uuid();
    }
}
?>