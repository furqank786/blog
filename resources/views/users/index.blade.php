@extends('admin')

@section('content')
<!--<div class="well">-->
<!--    <h1>Welcome to New Blog!</h1>-->
<div class="content" style="margin-left: 70px;">
    @foreach($users as $user)

    
        
        <h2>{{ $user->firstname }} {{$user->lastname}}</h2>
    
    @endforeach
</div>
@stop