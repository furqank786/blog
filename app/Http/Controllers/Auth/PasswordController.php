<?php

namespace Blog\Http\Controllers\Auth;

use Blog\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Mail;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
//    public function postEmail(Request $request)
//    {
//        $email = $request->email;
//        
//        Mail::send('emails.password', ['email' => $email], function ($m) use ($email) {
//            $m->from('admin@blog.com', 'My Blog');
//
//            $m->to($email, $email)->subject('Your blog password reset secret code!');
//        });
//        die('done!');
//    }


//    
    
}
