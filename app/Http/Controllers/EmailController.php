<?php

namespace App\Http\Controllers;


use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request){
        $to = $request->to;
        $sub = $request->sub;
        $msg = $request->msg;
        Mail::to($to)->send(new WelcomeEmail($sub, $msg));
        return "email send";


    }
}
