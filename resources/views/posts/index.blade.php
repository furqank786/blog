@extends('app')

@section('content')
<h1>Welcome to New Blog!</h1>

@foreach($posts as $post)

<article id="blogform">
    <h2><a href="posts/{{ $post->id }}">{{ $post->post_title }}</a></h2>
    <div class='body'>
        <?php 
        $user=Session::get('user'); 
        if($user && $user->email !=''){ ?>
            <span><a href="posts/{{ $post->id }}/edit">Edit</a></span> | 
        <?php }?>
        {{ $post->post_excerpt }}
    </div>
</article>

@endforeach

@stop