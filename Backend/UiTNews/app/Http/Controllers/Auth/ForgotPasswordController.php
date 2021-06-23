<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
//use DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        //$this->data['title'] = trans('backpack::base.reset_password'); // set the page title
        // return view('backpack::auth.passwords.email', $this->data);
        return view('auth.passwords.email');
    // }
    }

    // public function getEmail()
    // {

    //    return view('auth.password.email');
    // }

    public function postEmail(Request $request)
    {

        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(60);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );
        Mail::send('auth.verify',['token' => $token], function($message) use ($request) {
                  $message->from('19520056@gm.uit.edu.vn');
                  $message->to($request->email);
                  $message->subject('Reset Password Notification');
               });

        return view('auth.checkmail');
        // back()->with('message', 'We have e-mailed your password reset link!');
    }
}
