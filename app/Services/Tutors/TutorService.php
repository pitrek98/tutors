<?php

namespace App\Services\Tutors;

use App\Models\Tutors\Tutor;

class TutorService
{
    public Tutor $tutorModel;

    public function __construct(Tutor $tutorModel)
    {
        $this->tutorModel = $tutorModel;
    }

    public function show($id)
    {
        return $this->tutorModel->with('subject')->find($id);
    }

    public function destroy($id)
    {
        return $this->tutorModel->destroy($id);
    }

    public function create($tutor)
    {
        $this->tutorModel::create($tutor);
    }
}
