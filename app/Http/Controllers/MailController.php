<?php

namespace App\Http\Controllers;
use App\Http\Controllers\MailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
class MailController extends Controller
{
    public function sendContactMail(Request $request) {
        $email = $request->query('email');
        Mail::to($email)->send(new ContactFormMail());
        return redirect()->to('/home');
    }
}
