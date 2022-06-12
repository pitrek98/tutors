<?php

namespace App\Services\Tutors;

use App\Models\Tutors\Tutor;

class TutorsService
{
    public Tutor $tutorModel;

    public function __construct(Tutor $tutorModel)
    {
        $this->tutorModel = $tutorModel;
    }

    public function list($name, $mark, $description)
    {
        return $this->tutorModel->with('subject')->get();
    }
}
