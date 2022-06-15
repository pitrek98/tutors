<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function getWriteView($id)
    {
        return view('mail', ['id' => $id]);
    }
}
