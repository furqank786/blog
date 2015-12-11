@extends('app')
@section('content')
<div class="well">
{!! Form::open([ 'class' => 'form-horizontal', 'id' => 'blogform']) !!}
	<h1>User Login</h1>
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
        <div class="form-group">
            <div class="col-sm-2"></div>
                <div class="col-sm-10"><a href={{URL::to('password/email')}}>Forgot password</a>
            </div>
        </div>
            
{!! Form::close() !!}
</div>
@stop
