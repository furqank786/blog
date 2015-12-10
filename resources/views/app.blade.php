<!DOCTYPE html>
<html>
    <head>
        <title>Blog</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/all.css')}}">
    </head>
<body id="background">
	<div class="container">
            <?php 
                $user = Auth::user();
                Session::put('user',$user);
                $user=Session::get('user'); 
                   
                if($user && $user->email !=''){ ?>
                <div style="float:right;">
                    <span style="color:#fff;"> <a href="{{ url('/posts') }}" style="color:#fff;"><b>Home</b></a> </span> |
                    <span> <a href="{{ url('/posts/create') }}" style="color:#fff;"><b>Create New post</b></a> </span> |
                    <span> <a href="{{ url('/users/changepassword') }}" style="color:#fff;">Change password</b></a> </span> |
                    <span> <a href="{{ url('/auth/logout') }}" style="color:#fff;"><b>Logout</b></a></span>
                </div>
            <?php } else{ ?>
                <div style="float:right;">
                    <span"> <a href="{{ url('/posts') }}" style="color:#fff;"><b>Home</b></a> </span> |
                    <span> <a href="{{ url('/auth/register') }}" style="color:#fff;"><b>Create New profile</b></a> </span> |
                    <span> <a href="{{ url('/auth/login') }}" style="color:#fff;"><b>Sign In (existing users)</b></a> </span>
                </div>
           <?php }?>
		@yield('content')
	</div>
</body>

</html>