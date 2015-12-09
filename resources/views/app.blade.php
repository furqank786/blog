<!DOCTYPE html>
<html>
    <head>
        <title>Blog</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/all.css')}}">
    </head>
<body>
	<div class="container">
            <?php 
                $user = Auth::user();
                Session::put('user',$user);
                
            ?>
            <?php 
            
                $user=Session::get('user'); 
                   
                if($user && $user->email !=''){ ?>
                <div style="float:right">
                    <span> <a href="{{ url('/posts') }}">Home</a> </span> |
                    <span> <a href="{{ url('/posts/create') }}">Create New post</a> </span> |
                    <span> <a href="{{ url('/auth/logout') }}">Logout</a></span>
                </div>
            <?php } else{ ?>
                <div style="float:right">
                    <span> <a href="{{ url('/posts') }}">Home</a> </span> |
                    <span> <a href="{{ url('/auth/register') }}">Create New profile</a> </span> |
                    <span> <a href="{{ url('/auth/login') }}">Sign In (existing users)</a> </span>
                </div>
           <?php }?>
		@yield('content')
	</div>
</body>

</html>