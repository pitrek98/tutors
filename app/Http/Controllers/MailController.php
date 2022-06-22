<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FascadesMail;
use App\Mail\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // dd($request->all());
        $tutorName = $request->get('name');
        $username = $request->get('username');
        $title = $request->get('title');
        $message = $request->get('message');
        $emailAdress = $request->get('email');

        $details = [
            'title' => $title,
            'body' => $message,
            'username' => $username
        ];

        FascadesMail::to($emailAdress)->send(new Mail($details));

    }

    public function getWriteView($id)
    {
        return view('mail', ['id' => $id]);
    }
}
