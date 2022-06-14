<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Tutors\TutorService;
use App\Services\Tutors\SubjectsService;

class TutorController extends Controller
{
    public TutorService $tutorService;
    public SubjectsService $subjectsService;

    public function __construct(TutorService $tutorService, SubjectsService $subjectsService)
    {
        $this->tutorService = $tutorService;
        $this->subjectsService = $subjectsService;
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

    public function getCreateView()
    {
        // $subjects = DB::table('subjects')->get();
        $subjects = $this->subjectsService->list();
        return view('tutors.create', ['subjects' => $subjects]);
    }

    public function create(Request $request)
    {
        // dd($request->all());
        $tutor = $request->all();
        $this->tutorService->create($tutor);
        return redirect()->route('tutors.list');
    }
}
