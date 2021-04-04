<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\SendMail;

class MailController extends Controller
{
    public function send_mail(){
    	$data = [
    		'name' => 'Shrek'
    	];

    	Mail::to('shbazhenov@gmail.com')->send(new SendMail($data));
    }
}
