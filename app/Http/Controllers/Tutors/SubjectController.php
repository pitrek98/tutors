<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use App\Models\Tutors\Subject;
use Illuminate\Http\Request;
use App\Services\Tutors\SubjectService;
use PhpParser\Node\Expr\FuncCall;

class SubjectController extends Controller
{
    public SubjectService $subjectService;

    public function __construct(SubjectService $subjectService)
    {
        $this->subjectService = $subjectService;
    }

    public function getCreateView()
    {
        return view('tutors.subjects.create');
    }

    public function create(Request $request)
    {
        $subject = $request->all();
        $this->subjectService->create($subject);
        return redirect()->route('subjects.list');
    }

    public function show($id)
    {
        $subject = $this->subjectService->show($id);
        return view('tutors.subjects.show', ['subject' => $subject]);
    }
}
