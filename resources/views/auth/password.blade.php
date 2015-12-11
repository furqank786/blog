@extends('app')
@section('content')
<div class="well">
    {!! Form::open([ 'class' => 'form-horizontal', 'id' => 'blogform']) !!}
            <h1>Forgot Password</h1>
            <div style="text-align: center">Please enter your email address to reset password</div>
            @if(Session::has('status'))
                <div class="col-sm-2"></div>
                <div class="col-sm-10 alert alert-success">{{ session('status') }}</div>
            @endif
            @include('errors.list')
            <div class="form-group">
                    {!! Form::label('email', 'Email:', ['class' => 'control-label col-sm-2'])  !!}
                    <div class="col-sm-10">
                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>
            </div>
            <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                            {!! Form::submit('Send Password Reset Email', null, ['class' => 'form-control']) !!}
                    </div>
            </div>

    {!! Form::close() !!}
</div>
@stop

