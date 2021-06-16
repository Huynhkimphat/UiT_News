<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use DB;
//use App\User;
use App\Models\User;
//use Hash;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class ResetPasswordController extends Controller
{
    public function showResetForm($token) {

       return view('auth.passwords.reset', ['token' => $token]);
    }

    public function reset(Request $request)
    {
        return "HI";
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        $updatePassword = DB::table('password_resets')
                            ->where(['email' => $request->email, 'token' => $request->token])
                            ->first();
        return $updatePassword;
        if(!$updatePassword)
            return back()->withInput()->with('error', 'Invalid token!');

          $user = User::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);

          DB::table('password_resets')->where(['email'=> $request->email])->delete();

          return view('/login')->with('message', 'Your password has been changed!');
    }
}
