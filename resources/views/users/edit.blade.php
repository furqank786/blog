@extends('app')
@section('content')
<div class="well">
    {!! Form::open(['method' => 'PATCH', 'url' => 'users/'.base64_encode($user->id),'class' => 'form-horizontal', 'id' => 'blogform']) !!}
            @include('errors.list')
            @if(Session::has('profile_update'))
                <div class="col-sm-2"></div>
                <div class="col-sm-10 alert alert-success">{{ session('profile_update') }}</div>
            @endif
            @include('users.form')
            
{!! Form::close() !!}
</div>
@stop
