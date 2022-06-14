<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use App\Services\Tutors\SubjectsService;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public SubjectsService $subjectsService;

    public function __construct(SubjectsService $subjectsService)
    {
        $this->subjectsService = $subjectsService;
    }

    public function list()
    {
        $subjects = $this->subjectsService->list();
        return view("tutors.subjects.list", ["subjects" => $subjects]);
    }
}
