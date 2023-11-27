<?php

namespace App\Services;

use App\Repositories\PitchRepository;
use Illuminate\Support\Facades\Auth;

class PitchService
{
    protected $pitchRepository;

    public function __construct(PitchRepository $pitchRepository)
    {
        $this->pitchRepository = $pitchRepository;
    }

    public function getAllPitches()
    {
        dd(Auth::user());
        $userType = Auth::user()->role;

        if ($userType == 1) {
            return $this->pitchRepository->getAll();
        } else {
            return $this->pitchRepository->getByUserId(Auth::user()->id);
        }
    }

    public function createPitch($requestData)
    {

        return $this->pitchRepository->create($requestData);
    }
}
