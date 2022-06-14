<?php

namespace App\Services\Tutors;

use App\Models\Tutors\Subject;

class SubjectService
{
    public Subject $subjectModel;

    public function __construct(Subject $subjectModel)
    {
        $this->subjectModel = $subjectModel;
    }

    public function create($subject)
    {
        $this->subjectModel::create($subject);
    }
}
