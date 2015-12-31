@extends('admin')
@section('content')
<div class="well">
    {!! Form::open(['method' => 'PATCH', 'url' => 'users/'.base64_encode($user->id),'class' => 'form-horizontal', 'id' => 'blogform']) !!}
            @include('errors.list')
            @include('users.form')
            
{!! Form::close() !!}
</div>
@stop
