<!DOCTYPE html>
<html>
    <head>
        <title>Blog</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/all.css')}}">
    </head>
<body>
       <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
           <div class="container">
               <div class="navbar-header">
<!--                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar">aaaaaaaaaaaaaaaa</span>
                    <span class="icon-bar">bbbbbbbbbbb</span>
                    <span class="icon-bar">ccccccccccc</span>
                </button>-->
                <?php 
                 $user = Auth::user();
                Session::put('user',$user);
                $user=Session::get('user'); 
                if($user && $user->email !=''){
                    $user_id = base64_encode($user->id);
                ?>
                    <a class="navbar-brand" href="{{ url('/posts') }}" >Home</a>
                    <a class="navbar-brand" href="{{ url('/users/edit/'.$user_id) }}" >User Profile</a>
                    <a class="navbar-brand" href="{{ url('/users/changepassword') }}" >Change password</a>
                    <a class="navbar-brand" href="{{ url('/posts/create') }}" >Create Post</a>
                    <a class="navbar-brand" href="{{ url('/auth/logout') }}" >Logout</a>
                <?php } else{ ?>
                    <a class="navbar-brand" href="{{ url('/posts') }}" >Home</a>
                    <a class="navbar-brand" href="{{ url('/auth/register') }}" >Create New profile</a>
                    <a class="navbar-brand" href="{{ url('/auth/login') }}" >Sign In (existing users)</a>
                <?php }?>
                </div>
           </div>
       </nav>
    <br>
    <div style="text-align: center;font-weight: bold;size: 15px;">Welcome to Blog!</div>
        <br><br>
	<div class="container col-lg-8">
            @yield('content')
        </div>
        <div class="col-lg-4">
            <div class="well">
                    <h4>Blog Items</h4>
<!--                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>-->
                    <!-- /.input-group -->
                </div>
        </div><br>
        <hr>
    <div class="container">    
        <footer>
            <div class="row">
                <div class="col-lg-12" style="text-align: center;">
                    <p>Copyright © Blog {{date('Y')}}</p>
                </div>
            </div>
            <!-- /.row -->
        </footer> 
    </div>
            
</body>

</html>