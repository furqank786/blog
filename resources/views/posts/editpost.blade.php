@extends('admin')
@section('content')
<div class="well">
    {{-- {!! Form::open(['method' => 'PATCH', 'url' => 'posts/'.$post->id, 'id' => 'blogform', 'class' => 'form-horizontal']) !!} --}}
    {!! Form::model($post,['method' => 'PATCH', 'url' => 'posts/'.$post->id, 'id' => 'blogform', 'class' => 'form-horizontal']) !!}
        <h1>Edit: {!! $post->post_title !!}</h1>
        @include('errors.list')
        @include('posts.form',['submitButtonText' => 'Update Post'])

    {!! Form::close() !!}
</div>
@stop