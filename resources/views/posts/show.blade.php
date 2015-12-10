@extends('app')

@section('content')
<h1>{{ $post->post_title }}</h1>

    <article>
        <div class='body'>{{ $post->post_excerpt }}</div>
    </article>

@stop