@extends('app')
@section('content')
{!! Form::open(['class' => 'form-horizontal', 'id' => 'blogform']) !!}
	<h1>User Registration</h1>
	<div class="form-group">
		{!! Form::label('firstname', 'First Name:', ['class' => 'control-label col-sm-2']) !!}
		 <div class="col-sm-10">
			{!! Form::text('firstname', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lastname', 'Last Name:', ['class' => 'control-label col-sm-2'])  !!}
		<div class="col-sm-10">
			{!! Form::text('lastname', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('email', 'Email:', ['class' => 'control-label col-sm-2'])  !!}
		<div class="col-sm-10">
			{!! Form::email('email', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('password', 'Password:', ['class' => 'control-label col-sm-2'])  !!}
		<div class="col-sm-10">
			{!! Form::password('password', ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('confirm_password', 'Confirm Password:', ['class' => 'control-label col-sm-2'])  !!}
		<div class="col-sm-10">
			{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-10">
			{!! Form::submit('Register', null, ['class' => 'form-control']) !!}
		</div>
	</div>
        <div class="form-group">
            <div class="col-sm-2"></div>
                <div class="col-sm-10"><a href={{URL::to('auth/login')}}>Already Registered!</a>
            </div>
        </div>
{!! Form::close() !!}

@if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
@stop
