<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendemail(Request $req) {
        $data=[
            'name'=>$req->name,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'message'=>$req->message,
        ];
        Mail::to('382578132@qq.com')->send(new ContactEmail($data));
        return view('message-sent');
    }
}
