<?php

namespace App\Repositories;

use App\Models\Pitch;

class PitchRepository
{
    public function getAll()
    {
        return Pitch::all();
    }

    public function getByUserId($userId)
    {
        return Pitch::where('user_id', $userId)->get();
    }

    public function create($data)
    {
        return Pitch::firstOrCreate($data);
    }
}
