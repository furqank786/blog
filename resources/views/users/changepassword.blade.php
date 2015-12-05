@extends('app')
@section('content')
<hr>
{!! Form::open(['route' => 'users.store', 'class' => 'form-horizontal', 'id' => 'blogform']) !!}
	<h1>Change Password</h1>
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
		{!! Form::label('confirmpassword', 'Confirm Password:', ['class' => 'control-label col-sm-2'])  !!}
		<div class="col-sm-10">
			{!! Form::password('password', ['class' => 'form-control']) !!}
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-10">
			{!! Form::submit('Submit', null, ['class' => 'form-control']) !!}
		</div>
	</div>
{!! Form::close() !!}
@stop
