<?php

namespace App\Http\Controllers;
use Mail;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send(){
        Mail::send('email.test', [],function($message){
                $message->subject('Laravel Mail');
            $message->to('s11037018@gmail.com');
        });
        return "已寄送";
    }
}
