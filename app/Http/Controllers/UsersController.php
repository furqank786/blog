<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use URL;
use \Route;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = \Blog\User::orderBy('created_at', 'desc')
                        ->where('email','!=','admin@blog.com')
                        ->where('status','=','active')
                        ->get();
        return view('users.index',  compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = base64_decode($id);
        $user = \Blog\User::findorfail($id);
        return view('users.edit',  compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $id = base64_decode($id);
        $user = \Blog\User::findorfail($id);
        $user->update($request->all());
        \Session::flash('profile_update','User has been successfully updated!');
        if(strstr(URL::previous(),'edituser')){
            //return view('users.edituser', compact( 'user' ,$user));
            return redirect('users');
            //exit('redirect code will come here');
        } else {
            //return redirect('users');
           return view('users.edit', compact( 'user' ,$user));
           //redirect('/');
        }
        
        //exit;
        //return view('users.edituser', compact( 'user' ,$user));
        //return url(URL::previous()) ;
        //return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login()
    {
        return view('users.login');
    }

    public function changepassword(Request $request)
    {
        if($request->all()){
            $this->validate($request, [
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6'
        ]);
           
            $user = \Blog\User::findOrFail($request->id);
           
        // Validate the new password length...

            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();
            \Session::flash('change_password','Your password has been successfully updated!');
            return view('users.changepassword', compact( 'user' ,$user));
        } else{
            $user = \Session::get('user');
            return view('users.changepassword', compact( 'user' ,$user));
        }
    }
    
    public function activateaccount(Request $request)
    {
                
                
        if($request->all()){
            $validator = Validator::make($request->all(), [
                'activation_code' => 'required',
            ]);
            if ($validator->fails()) {
            return redirect('users/activateaccount')
                        ->withErrors($validator)
                        ->withInput();
            } else {
               // print_r($request);
                $userData = \Blog\User::where('activation_code', $request->activation_code)->first();
                if($userData){
                    \Blog\User::where('activation_code', $request->activation_code)
                                    ->update(['status' => 'active']);
                    return redirect()->action('PostsController@index');
                } else{
                    $validator->errors()->add('activation_code', 'Activation code is wrong Please try again');
                    return redirect('users/activateaccount')
                        ->withErrors($validator)
                        ->withInput();
                }
            }
        } else{
            return view('users.activateaccount');
        }
    }
    
    public function edituser($id)
    {
        $id = base64_decode($id);
        $user = \Blog\User::findorfail($id);
        return view('users.edituser',  compact('user'));
    }
    
    public function deleteuser($id)
    {  
       if($id){
            $id = base64_decode($id);
            $user = \Blog\User::findOrFail($id);
              $user->update([
                 'status' => 'inactive'
             ]);//->save();
             \Session::flash('delete_user','User has been successfully deleted!');
             return redirect('users');
       }
    }

//    public function updatepassword(Request $request)
//    {
//        $user = User::findOrFail($id);
//        print_r($user);
//        exit;
//        // Validate the new password length...
//
//        $user->fill([
//            'password' => Hash::make($request->newPassword)
//        ])->save();
//        
//        return view('users.updatepassword');
//    }
}
