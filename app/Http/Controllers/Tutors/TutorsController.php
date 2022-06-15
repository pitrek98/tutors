<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Services\Tutors\TutorsService;
use App\Services\Tutors\SubjectsService;


class TutorsController extends Controller
{
    public TutorsService $tutorsService;
    public SubjectsService $subjectsService;

    public function __construct(TutorsService $tutorsService, SubjectsService $subjectsService)
    {
        $this->tutorsService = $tutorsService;
        $this->subjectsService = $subjectsService;
    }

    public function list(Request $request)
    {
        $name = $request->get('name');
        $mark = $request->get('mark');
        $description = $request->get('description');
        $subject_id = $request->get('subject_id');
        $values = ["name" => $name, "mark" => $mark, "description" => $description, "subject_id" => $subject_id];
        // $tutors = DB::table('tutors')->get();
        $tutors = $this->tutorsService->list($name, $mark, $description, $subject_id);
        // $subjects = DB::table('subjects')->get();
        $subjects = $this->subjectsService->list();
        return view("tutors.list", ["tutors" => $tutors, "subjects" => $subjects, "values" => $values]);
    }
}
