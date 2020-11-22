<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    public function index()
    {
        // dd('index');
        return view('send_email');
    }

    public function send(Request $request)
    {
        $this->validate($request,[
        'name' => 'required',
        'email' => 'required|email',
        'messagg' => 'required'
        ]);
    }
}
