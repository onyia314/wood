<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/dashboard/dashboard.css">

    @stack('css')

  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(/images/logo.png);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{{route('index')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('gallery')}}">Gallery</a>
                </li>
                <li>
                    <a href="{{route('about')}}">About</a>
                </li>
	            </ul>
	          </li>

            @auth
            <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Projets</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="{{route('projects.create')}}">Add project</a>
                </li>
                <li>
                    <a href="{{route('projects.index')}}">view projects</a>
                </li>
              </ul>
	          </li>

            <li>
              <a href="#settingsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Settings</a>
              <ul class="collapse list-unstyled" id="settingsSubmenu">
                <li>
                    <a href="{{route('password.change.create')}}">change password</a>
                </li>
              </ul>
	          </li>

            @endauth

            @if(Auth::user()->role == 'master')
            <li>
              <a href="{{route('users.index')}}">edit users</a>
	          </li>
            @endif
	          

	          {{-- <li>
              <a href="#">Portfolio</a>
	          </li>
	          <li>
              <a href="#">Contact</a>
	          </li> --}}

	        </ul>

	        <div class="footer">
	        	<p>
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
            </p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                  <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <button class = "btn btn-danger" type="submit">logout</button>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </nav>
  
        @yield('content')
        
      </div>
		</div>

    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/admin/dashboard.js"></script>
  </body>
</html>