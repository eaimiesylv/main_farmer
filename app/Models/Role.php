<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
   

    protected $fillable = [
        'name', 'is_admin', 'is_default', 'type_id', 'created_by'
    ];

   
	 public function users()
    {
        return $this->belongsToMany(User::class, 'role_user', 'user_id', 'role_id');
    }

}
