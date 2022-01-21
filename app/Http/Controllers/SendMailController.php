<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail()
    {
        $details = [
            'title' => 'Mail from shouts.dev',
            'body' => 'This is a test email using Google SMTP'
        ];

        Mail::to('tanvir59@outlook.com')->send(new SendMail($details));

        dd("Mail Sent Successfully.");
    }
}
