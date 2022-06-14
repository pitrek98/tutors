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

    public function list($name, $mark, $description, $subject_id)
    {
        return $this->tutorModel->FilterByName($name)->filterBySubjectId($subject_id)->with('subject')->get();
    }
}
