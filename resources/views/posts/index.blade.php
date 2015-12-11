@extends('app')

@section('content')
<!--<div class="well">-->
<!--    <h1>Welcome to New Blog!</h1>-->
<div class="content" style="margin-left: 70px;">
    @foreach($posts as $post)

    <article id="blogform" >
        <?php 
            $user=Session::get('user'); 
            if($user && $user->email !=''){ 
        ?>
            <div style="float:right"><a href="posts/{{ $post->id }}/edit">Edit</a></div>
        <?php }?>
        <h2><a href="posts/{{ $post->id }}">{{ $post->post_title }}</a></h2>
        <p class="lead"><span style="color:#999999">by</span> {{$post->firstname}} {{$post->lastname}}</p>
        <hr>
        <p><span class="glyphicon glyphicon-time"></span> Posted on {{date('Y-m-d',strtotime($post->post_date))}}</p>
        <hr>
        <div class='body'>
            {{ $post->post_excerpt }}
        </div>
    </article>

    @endforeach
</div>
@stop