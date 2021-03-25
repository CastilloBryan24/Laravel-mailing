<?php

namespace App\Http\Controllers;

use App\Mail\MailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('mail');
    }

    public function store(Request $request)
    {
        Mail::to('bryan.castillo24@hotmail.com')->send(new MailSender($request));
        return redirect()->back();
    }
}
