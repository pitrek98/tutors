<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TutorController extends Controller
{
    public function show($id)
    {
        $tutor = DB::table('tutors')->find($id);
        return view('Tutors.show', ['tutor' => $tutor]);
    }
}
