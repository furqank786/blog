@extends('app')
@section('content')
<div class="well">
{!! Form::open(['url' => 'posts', 'id' => 'blogform', 'class' => 'form-horizontal']) !!}
    <h1>Create New Post</h1>
    @include('errors.list')
    @include('posts.form',['submitButtonText' => 'Add Post']) 

{!! Form::close() !!}

</div>

@stop