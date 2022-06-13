<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\Tutors\TutorService;
use App\Services\Tutors\TutorsService;

class TutorController extends Controller
{
    public TutorService $tutorService;

    public function __construct(TutorService $tutorService)
    {
        $this->tutorService = $tutorService;
    }

    public function show($id)
    {
        // $tutor = DB::table('tutors')->find($id);
        $tutor = $this->tutorService->show($id);
        return view('Tutors.show', ['tutor' => $tutor]);
    }

    public function destroy($id)
    {
        $this->tutorService->destroy($id);
        return redirect()->route('tutors.list');
    }
}
