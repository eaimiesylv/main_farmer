<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Pitch;
use App\Services\PitchService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PitchController extends Controller
{
    protected $pitchService;

    public function __construct(PitchService $pitchService)
    {
       // $this->middleware('auth');
        $this->pitchService = $pitchService;
       
    }

    public function index()
    {
    
        $matchingRecords = $this->pitchService->getAllPitches();
        return view('crm.document.index')->with('matchingRecords', $matchingRecords);
    }

    public function store(Request $request)
    {
        try {
            // Validate the uploaded file
            $request->validate([
                'pitchname' => 'required|max:50',
                'pitchfile' => 'required|file|mimes:pdf|max:2060',
            ]);

            $path = new Imageupload($request->file('pitchfile'), 'doc', 'none');
            $formdata = array_merge($request->except('_token'), ['pitchfile' => $path->storage_path, 'user_id' => Auth::user()->id]);

            $this->pitchService->createPitch($formdata);

            return redirect()->route('view_pitch.index')->with('success', 'Pitch file uploaded successfully.');
        } catch (QueryException $e) {
            Log::error('Error storing document: ' . $e->getMessage());
            return redirect()->route('view_pitch.index')->with('errors', 'Pitch file upload failed. Try again');
        }
    }

   

}
