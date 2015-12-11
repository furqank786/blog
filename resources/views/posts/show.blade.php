@extends('app')
@section('content')
<div>
        <article>
            <h1>{{ $post->post_title }}</h1>
            <p class="lead"><span style="color:#999999">by</span> {{$post->firstname}} {{$post->lastname}}</p>
            <hr>
            <p><span class="glyphicon glyphicon-time"></span> Posted on {{date('Y-m-d',strtotime($post->post_date))}}</p>
            <hr>
            <div class='body'>{{ $post->post_excerpt }}</div>
        </article>
</div>
@stop