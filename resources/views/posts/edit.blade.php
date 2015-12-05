@extends('app')
@section('content')

{{-- {!! Form::open(['method' => 'PATCH', 'url' => 'posts/'.$post->id, 'id' => 'blogform', 'class' => 'form-horizontal']) !!} --}}
{!! Form::model($post,['method' => 'PATCH', 'url' => 'posts/'.$post->id, 'id' => 'blogform', 'class' => 'form-horizontal']) !!}
    <h1>Edit: {!! $post->post_title !!}</h1>
    @include('posts.form',['submitButtonText' => 'Update Post'])

{!! Form::close() !!}

@include('errors.list')

@stop