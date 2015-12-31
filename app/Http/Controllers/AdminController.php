<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;


use Blog\User;
use Validator;
use Session;
use Mail;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class AdminController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    
    protected $redirectTo = '/admin';
    protected $redirectAfterLogout = 'auth/login';
   //protected $redirectPath = '/admin';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct() {
        $this->middleware('auth',['except' => '/admin/login']);
    }
    
    public function index()
    {
        return view('admin.dashboard');
    }
    public function getLogin()
    {
        return view('admin.login');
    }
    
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            $this->loginUsername() => 'required', 'password' => 'required',
        ]);

        $throttles = $this->isUsingThrottlesLoginsTrait();

        if ($throttles && $this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }

        $credentials = $this->getCredentials($request);
        $credentials['status'] = 'active';
         //print_r($credentials);exit('------');
         Session::put('email', $credentials['email']);
        if (Auth::attempt($credentials, $request->has('remember'))) {
            return $this->handleUserWasAuthenticated($request, $throttles);
        }
        
        if ($throttles) {
            $this->incrementLoginAttempts($request);
        }
       
        return redirect('/admin/login')
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => 'User credentials does not match or account is not active.',
            ]);
    }
    
    public function getLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/admin/login');
        //return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }
            
}
