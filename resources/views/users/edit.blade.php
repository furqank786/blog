@extends('app')
@section('content')
<div class="well">
    {!! Form::open(['method' => 'PATCH', 'url' => 'users/'.$user->id,'class' => 'form-horizontal', 'id' => 'blogform']) !!}
            <h1>Edit Profile</h1>
            @include('errors.list')
            @if(Session::has('profile_update'))
                <div class="col-sm-2"></div>
                <div class="col-sm-10 alert alert-success">{{ session('profile_update') }}</div>
            @endif
            <div class="form-group">
                    {!! Form::label('firstname', 'First Name:', ['class' => 'control-label col-sm-3']) !!}
                     <div class="col-sm-9">
                            {!! Form::text('firstname', $user->firstname, ['class' => 'form-control']) !!}
                    </div>
            </div>
            <div class="form-group">
                    {!! Form::label('lastname', 'Last Name:', ['class' => 'control-label col-sm-3'])  !!}
                    <div class="col-sm-9">
                            {!! Form::text('lastname', $user->lastname, ['class' => 'form-control']) !!}
                    </div>
            </div>
            <div class="form-group">
                    {!! Form::label('email', 'Email:', ['class' => 'control-label col-sm-3'])  !!}
                    <div class="col-sm-9">
                            {!! Form::email('email', $user->email, ['class' => 'form-control', 'readonly']) !!}
                    </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3"></div>
                    <div class="col-sm-9"><a href={{URL::to('users/changepassword')}}>Change Password</a>
                </div>
            </div>
            <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                            {!! Form::submit('Update', null, ['class' => 'form-control']) !!}
                    </div>
            </div>
            
{!! Form::close() !!}
</div>
@stop
