<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\SendMail;

class MailController extends Controller
{
    public function send_mail(){
    	$data = [
    		'name' => 'Ramazan'
    	];

    	Mail::to('190103273@stu.sdu.edu.kz')->send(new SendMail($data));
    }
}
