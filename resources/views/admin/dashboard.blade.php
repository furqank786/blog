@extends('admin')
@section('content')
<style>
  a {
    color: #fff;
  }
  a:hover{
      color: #fff;
  }
  a:visited{
      color: #fff;
  }
</style>

<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
						<i class="fa fa-users"></i>
						<div class="count"><a href="{{ url('/users') }}">Users</a></div>
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box dark-bg">
						<i class="fa fa-book"></i>
						<div class="count"><a href="{{ url('/posts/all') }}">Posts</a></div>					
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="info-box green-bg">
						<i class="fa fa-comments"></i>
						<div class="count">Comments</div>					
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
			</div><!--/.row-->

@stop