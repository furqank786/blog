@extends('admin')
@section('content')
<div class="profile-widget profile-widget-info">
    <div class="panel-body">
      <div class="col-lg-2 col-sm-2">
        <h4>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>               
        <div class="follow-ava">
            <img src="{{ URL::asset('css/images/profile-widget-avatar.jpg')}}" alt="">
        </div>
        <h6>Administrator</h6>
      </div>
      <div class="col-lg-4 col-sm-4 follow-info">
          <p>Hello I’m {{Auth::user()->firstname}} {{Auth::user()->lastname}}, admin of a blog.</p>
          <p>{{Auth::user()->email}}</p>
                                         
      </div>
           
    </div>
</div>
@stop