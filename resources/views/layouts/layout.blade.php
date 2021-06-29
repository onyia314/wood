<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- general plugin-->

    <link rel="stylesheet" href="/vendor/plugins/aos/aos.css">
    <link rel="stylesheet" href="/vendor/plugins/carousel/owl.carousel.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="/css/style.css">

    @stack('css')

    <title>@yield('title')</title>
  </head>
  <body>


    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap">
      <div class="site-navbar-top">
        <div class="container py-3">
          <div class="row align-items-center">
            <div class="col-6">
              <div class="d-flex mr-auto">
                <a href="mailto:marinaweinstein@yahoo.com" class="d-flex align-items-center mr-4">
                  <span class="icon-envelope mr-2"></span>
                  <span class="d-none d-md-inline-block">marinaweinstein@yahoo.com</span>
                </a>
                <a href="tel: +1 215-990-4058" class="d-flex align-items-center mr-auto">
                  <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">+1 215-990-4058</span>
                </a>
              </div>
            </div>
            <div class="col-6 text-right">
              <div class="mr-auto">
                <a href="https://facebook.com/MarinasRestoration/" target="_blank" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                <a href="https://instagram.com/marina_woodrestoration?utm_medium=copy_link" target="_blank" class="p-2 pl-0"><span class="icon-instagram"></span></a>

               {{--  <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a> --}}
              </div>
              
            </div>
          </div>
        </div>
      </div>

      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-2">
              <h1 class="my-0 site-logo"><a href="index.html">Brand</a></h1>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                    <li class="active"><a href="{{route('index')}}" class="nav-link">Home</a></li>
                    <li class="has-children">
                      <a href="#" class="nav-link">Pages</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="#" class="nav-link">Team</a></li>
                        <li><a href="#" class="nav-link">Pricing</a></li>
                        <li><a href="#" class="nav-link">FAQ</a></li>
                        <li class="has-children">
                          <a href="#">More Links</a>
                          <ul class="dropdown">
                            <li><a href="#">Menu One</a></li>
                            <li><a href="#">Menu Two</a></li>
                            <li><a href="#">Menu Three</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="{{route('about')}}" class="nav-link">About</a></li>
                    <li><a href="{{route('gallery')}}" class="nav-link">Gallery</a></li>
                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    @yield('curtain')
    @yield('content')


    <footer class="footer-16371">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-9 text-center">
            <div class="footer-site-logo mb-4">
              <a href="#">Colorlib</a>
            </div>
            <ul class="list-unstyled nav-links mb-5">
              <li><a href="#">About</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Press</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Legal</a></li>
              <li><a href="#">Contact</a></li>
            </ul>

            <div class="social mb-4">
              <h3>Stay in touch</h3>
              <ul class="list-unstyled">
                <li class="in"><a href="https://instagram.com/marina_woodrestoration?utm_medium=copy_link" target="_blank"><span class="icon-instagram"></span></a></li>
                <li class="fb"><a href="https://facebook.com/MarinasRestoration/"><span class="icon-facebook" target="_blank"></span></a></li>
                {{-- <li class="tw"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="pin"><a href="#"><span class="icon-pinterest"></span></a></li>
                <li class="dr"><a href="#"><span class="icon-dribbble"></span></a></li> --}}
              </ul>
            </div>

            <div class="copyright">
              <p class="mb-0"><small>&copy; Colorlib. All Rights Reserved.</small></p>
            </div>


          </div>
        </div>
      </div>
    </footer>
  
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/vendor/plugins/aos/aos.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/vendor/plugins/carousel/owl.carousel.min.js"></script>
    <script src="/js/jquery.sticky.js"></script>
    <script src="/js/main.js"></script>
    @stack('ui-script')

  </body>
</html>