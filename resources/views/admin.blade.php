<!DOCTYPE html>
<html>
    <head>
        <title>Blog Admin</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/all.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap-theme.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/elegant-icons-style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style-responsive.css')}}">
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
          <script src="js/lte-ie7.js"></script>
        <![endif]-->

        <!-- javascripts -->
    <script src="{{ URL::asset('js/jquery.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <!-- nicescroll -->
    <script src="{{ URL::asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="{{ URL::asset('js/scripts.js')}}"></script>
    </head>
<body >
    
	<body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="{{ url('/admin')}}" class="logo">Blog <span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="{{ URL::asset('css/images/avatar1_small.jpg')}}">
                            </span>
                            <span class="username">
                                @if(isset(Auth::user()->firstname))
                                    {{ Auth::user()->firstname }}
                                @endif
                            </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="{{ url('/admin/profile') }}"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/logout') }}"><i class="icon_key_alt"></i>  Log Out</a>
                            </li>
                            
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="">
                      <a class="" href="{{ url('/admin')}}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="{{ url('/users') }}" class="">
                          <i class="fa fa-users"></i>
                          <span>Manage Users</span>
                          <span class=""></span>
                      </a>
                  </li>
                    <li class="sub-menu">
                      <a href="{{ url('/posts/all') }}" class="">
                          <i class="fa fa-book"></i>
                          <span>Manage Posts</span>
                          <span class=""></span>
                      </a>
                  </li>       
                 <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-comments"></i>
                          <span>Manage Comments</span>
                          <span class=""></span>
                      </a>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				
                    </div>
              <!-- page start-->
              @yield('content')
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    


  </body>
</html>
