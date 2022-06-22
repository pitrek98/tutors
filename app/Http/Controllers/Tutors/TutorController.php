<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Tutors\TutorService;
use App\Services\Tutors\SubjectsService;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

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
        $subjects = $this->subjectsService->list();
        return view('tutors.create', ['subjects' => $subjects]);
    }

    public function create(Request $request)
    {
        $tutor = $request->all();
        $this->tutorService->create($tutor);
        return redirect()->route('tutors.list');
    }

    public function getEditView($id)
    {
        $subjects = $this->subjectsService->list();
        $tutor = $this->tutorService->show($id);
        return view('Tutors.edit', ['subjects' => $subjects, 'tutor' => $tutor]);
    }

    public function edit($id, Request $request)
    {
        $newTutor = $request->all();
        $this->tutorService->edit($id, $newTutor);
        return redirect()->route('tutors.list');
    }

    public function mail($id)
    {
        $tutor = $this->tutorService->show($id);
        return view('mail', ['email' => $tutor->mail, 'name' => $tutor->name]);
    }

    // public function sendmail(Request $request)
    // {
    //     $content = $request->content;
    //     $email = $request->email;
    //     Mail::raw($content, function ($message) {
    //         $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
    //         $message->to('piotrekszymiec@gmail.com', 'User Name');
    //     });
    //     return redirect()->route('tutors.list');
    // }
}
