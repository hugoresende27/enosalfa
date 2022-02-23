<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\AllMails;

use Illuminate\Http\Request;

use App\Mail\MailNotify;

use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function index () {
       
        
        return view('mail.index');
    }
    public function store (Request $request) {
       
        $mail = $request->mail;

        $new = new AllMails;
        $new->email=$request->mail;
        $new->save();
        // dd(get_defined_vars());
        Mail::to($mail)->send(new \App\Mail\WelcomeMail());
        // Mail::to("hugoresende27@gmail.com")->send(new \App\Mail\WelcomeMail());
        
        // new \App\Mail\WelcomeMail();
        $message = "Email enviado!";
        return view('mail.index')->with('message');
    }


    public function template()
    {
        return view ('mail.welcome-mail');
    }
    public function templatereg()
    {
        return view ('mail.register-mail');
    }
}
