 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="{{url('/')}}">PeakMe</a></h1>
        <!-- logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('driver')}}">Become a driver</a></li>
          <li><a href="#aboutUs">About Us</a></li>
         
          <li><a href="{{url('contact-us')}}">Contact Us</a></li>
          @if (Auth::guest() && !Auth::guard('webdriver')->check() && !Auth::guard('web')->check() )
          <li><a href="{{url('login')}}">Login</a></li>
          @else
          <li><a href="{{url('/logout')}}">
            @if(Auth::guard('web')->check())
            {{Auth::user()->username ? Auth::user()->username  :  Auth::user()->name}}
            @endif
            @if(Auth::guard('webdriver')->check())
            {{ auth()->guard('webdriver')->user()->firstName }} {{auth()->guard('webdriver')->user()->lastName}}
            @endif
          </a>
          </li>
          @endif

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
