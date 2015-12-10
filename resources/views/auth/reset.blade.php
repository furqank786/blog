@extends('app')
@section('content')
{!! Form::open([ 'class' => 'form-horizontal', 'id' => 'blogform']) !!}
	<h1>Reset Password</h1>
        @include('errors.list')
            {!! Form::hidden('token', $token) !!}
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
		{!! Form::label('password_confirmation', 'Confirm Password:', ['class' => 'control-label col-sm-2'])  !!}
		<div class="col-sm-10">
			{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-10">
			{!! Form::submit('Reset Password', null, ['class' => 'form-control']) !!}
		</div>
	</div>
 
{!! Form::close() !!}

@stop
