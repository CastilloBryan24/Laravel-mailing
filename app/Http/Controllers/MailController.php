<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'content' => 'required',
            'subject' => 'required'
        ]);

        $newEntry = new Mail;
        $newEntry->email = $request->email;
        $newEntry->subject_id = $request->subject_id;
        $newEntry->content = $request->content;
        $newEntry->save();

        // Envoi Mail
        // FacadesMail::to('navez.martin@gmail.com')->send(new SendEmail($request));

        return redirect()->back();
    }
}
