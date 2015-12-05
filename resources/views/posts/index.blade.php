@extends('app')

@section('content')
<h1>Posts</h1>

@foreach($posts as $post)

<article>
    <h2><a href="posts/{{ $post->id }}">{{ $post->post_title }}</a></h2>
    <div class='body'>{{ $post->post_excerpt }}</div>
</article>

@endforeach

@stop