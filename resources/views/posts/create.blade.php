@extends('app')
@section('content')

{!! Form::open(['url' => 'posts', 'id' => 'blogform', 'class' => 'form-horizontal']) !!}
    <h1>Create New Post</h1>
    @include('posts.form',['submitButtonText' => 'Add Post']) 

{!! Form::close() !!}

@include('errors.list')

@stop