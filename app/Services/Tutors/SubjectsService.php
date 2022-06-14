<?php

namespace App\Services\Tutors;

use App\Models\Tutors\Subject;

class SubjectsService
{
    public Subject $subjectModel;

    public function __construct(Subject $subjectModel)
    {
        $this->subjectModel = $subjectModel;
    }

    public function list()
    {
        return $this->subjectModel->with('tutors')->get();
    }
}
