@extends('app')
@section('content')
<div class="well">
    {!! Form::open(['class' => 'form-horizontal', 'id' => 'blogform']) !!}
            <h1>Change Password</h1>
            @include('errors.list')
            @if(Session::has('change_password'))
                <div class="col-sm-2"></div>
                <div class="col-sm-10 alert alert-success">{{ session('change_password') }}</div>
            @endif
            {!! Form::hidden('id',$user->id) !!}
            <div class="form-group">
                    {!! Form::label('email', 'Email:', ['class' => 'control-label col-sm-2'])  !!}
                    <div class="col-sm-10">
                            {!! Form::email('email', $user->email, ['class' => 'form-control', 'readonly']) !!}
                    </div>
            </div>
            <div class="form-group">
                    {!! Form::label('password', 'Password:', ['class' => 'control-label col-sm-2'])  !!}
                    <div class="col-sm-10">
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
            </div>
            <div class="form-group">
                    {!! Form::label('confirmpassword', 'Confirm Password:', ['class' => 'control-label col-sm-2'])  !!}
                    <div class="col-sm-10">
                            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>
            </div>

            <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                            {!! Form::submit('Submit', null, ['class' => 'form-control']) !!}
                    </div>
            </div>
    {!! Form::close() !!}
</div>
@stop
