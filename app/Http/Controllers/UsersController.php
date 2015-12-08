<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        //
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

    public function changepassword()
    {
        //return 'cahgne password';
        return view('users.changepassword');
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
}
