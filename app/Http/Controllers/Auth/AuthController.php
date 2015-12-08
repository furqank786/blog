<?php

namespace Blog\Http\Controllers\Auth;

use Blog\User;
use Validator;
use Mail;
use Blog\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $loginPath = '/login';
    protected $redirectTo = '/posts';
    protected $redirectAfterLogout = '/';


    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'lastname' => 'max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:3',
            'password_confirmation' => 'required|min:3'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {   
        
        $activation_code = rand();
        $user =  User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'activation_code' => $activation_code
        ]);
        Mail::send('users.confirmation', ['user' => $user], function ($m) use ($user) {
            $m->from('admin@blog.com', 'My Blog');

            $m->to($user->email, $user->firstname)->subject('Your blog activation code!');
        });
        return $user;
    }
    
}
