<!DOCTYPE html>
<html>
    <head>
        <title>Blog</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/all.css')}}">
    </head>
<body>
<div id='content' class="well" style="width: 500px;margin-left: 30%">
{!! Form::open(['action' => 'AdminController@postLogin' , 'class' => 'form-horizontal', 'id' => 'blogform']) !!}
	<h1>Admin Login</h1>
        @include('errors.list')
        
	<div class="form-group ">
		{!! Form::label('email', 'Email:', ['class' => 'control-label col-sm-2'])  !!}
		<div class="col-sm-10">
			{!! Form::email('email', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('password', 'Password:', ['class' => 'control-label col-sm-2'])  !!}
		<div class="col-sm-10">
			{!! Form::password('password', ['class' => 'form-control col-sm-10']) !!}
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-10 ">
			{!! Form::submit('Login', null, ['class' => 'form-control']) !!}
		</div>
	</div>
        
            
{!! Form::close() !!}
</div>

