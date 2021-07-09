<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Auth;
use PharIo\Manifest\Email;

class FrontController extends Controller
{
    public function addFeedback(Request $request)
    {
        $input = $request->all();
        Mail::send('Mail.mailfb', array(
        // 'name'=>$input["name"],
        'email'=>$input["email"],
        'content'=>$input['comment']), function($message){
	        $message->to('19520056@gm.uit.edu.vn', 'Visitor')->subject('Visitor Feedback!');
	    });

        Session::flash('flash_message', 'Send message successfully!');
        return back();
    }
    protected function validateForm(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'content' => 'required|string',
        ]);
    }
}
