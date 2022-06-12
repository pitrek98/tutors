<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TutorsController extends Controller
{
    public function list(Request $request)
    {
        $tutors = DB::table('tutors')->get();
        return view("tutors.list", ["tutors" => $tutors]);
    }
}
