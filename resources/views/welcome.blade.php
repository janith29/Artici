@extends('layouts.welcome')
@section('navigation')
<nav class="navbar navbar-inverse">
                
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand active" href="{{ url('/') }}">Artificiallimbcare.lk</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ url('/') }}">{{ __('views.welcome.home') }}</a></li>
      <li ><a href="{{ url('/aboutus') }}">About Us</a></li>
      <li > <a href="{{ url('/services') }}">Services</a></li>
      <li >  <a href="{{ url('/contact') }}">Contact</a></li>
      
     
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
          @if (Route::has('login'))
          @if (!Auth::check())
              @if(config('auth.users.registration'))
                  {{-- <a href="{{ url('/register') }}">{{ __('views.welcome.register') }}</a> --}}
              @endif
              <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          @else
              @if(auth()->user()->usertype == 'administrator'){{--->hasRole('administrator')--}}
              <li> <a href="{{ url('/admin') }}">{{ __('views.welcome.admin') }}</a></li>
              @elseif(auth()->user()->usertype == 'Receptionist')
              <li> <a href="{{ url('/receptionist') }}">{{ __('views.welcome.admin') }}</a></li>
              @elseif(auth()->user()->usertype == 'PNO')
              <li>  <a href="{{ url('/pno') }}">{{ __('views.welcome.admin') }}</a></li>
              @elseif(auth()->user()->usertype == 'Director')
              <li>  <a href="{{ url('/director') }}">{{ __('views.welcome.admin') }}</a></li>
              @elseif(auth()->user()->usertype == 'Patient')
              <li>  <a href="{{ url('/patient') }}">{{ __('views.welcome.admin') }}</a></li>
              @elseif(auth()->user()->usertype == 'Doctor')
              <li>  <a href="{{ url('/doctor') }}">{{ __('views.welcome.admin') }}</a></li>
              @endif
              <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out"></span>{{ __('views.welcome.logout') }}</a></li>
          @endif
      @endif
      
    </ul>
  </div>
</nav>
@endsection
@section('content')

        <div class="col-xs-12" >
<div class="container">
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/bg-img/bg1.jpg" alt="Los Angeles" width="1800px" height="800px">
        </div>
  
        <div class="item">
          <img src="img/bg-img/bg3.jpg" alt="Chicago" width="1800px" height="800px">
        </div>
      
        <div class="item">
          <img src="img/bg-img/bg4.jpg" alt="New york" width="1800px" height="800px">
        </div>
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
        </div>
<br>
.
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading col-xs-4">
          <h4>Friday close...</h4>
          <h4>Other days 9am - 5am</h4>
        </div>
        <div class="panel-heading col-xs-4">
            <h4>Email:-info@artificiallimbcare.lk</h4><h4> Call Us:-<a href="tel:0713450257">071 345 0257</a> </h4>
          </div>
        <div class="panel-heading col-xs-4">
            <h4>No 4, Mithrananda Mawatha,</h4> 
            <h4>Kiribathgoda.<br></h4>
          </div>
          
      </div>
      </div>
      <div class="container">
          <br>
          <div class="well well-lg"><p style="text-align:center;">
            <img src="img/icons/Services.png" alt="" width="75px" height="75px"></p>
            <h2 align="center">Our Services</h2>
                 
            </div>
            <div class="col-xs-3 text-center">
              <div class="panel panel-success ">
                  <div class="panel-heading ">
                     <img src="img/icons/orthosis.png" width="75px" height="75px">
                    <h4>Orthosis care</h4></div>
              </div>
            </div> 
            <div class="col-xs-3 text-center">
                <div class="panel panel-success ">
                    <div class="panel-heading "> <img src="img/icons/pedestrian-walking.png"  width="75px" height="75px">
                      <h4>Prosthesis care</h4></div>
                </div>
              </div> 
              <div class="col-xs-3 text-center">
                  <div class="panel panel-success ">
                      <div class="panel-heading "> <img src="img/icons/chaild.png"  width="75px" height="75px">
                        <h4>Children care</h4></div>
                  </div>
                </div> 
                <div class="col-xs-3 text-center">
                    <div class="panel panel-success ">
                        <div class="panel-heading "> <img src="img/icons/nose.png"  width="75px" height="75px">
                          <h4>Cosmetic  care</h4></div>
                    </div>
                  </div> 
                </div>
                
                <div class="container">
                    <div class="panel panel-danger">

                        {{-- <div class="panel-body"><p style="text-align:center;"><img src="img/core-img/artificial.png" class="center" width="800" height="420"></p></div> --}}
                        <div class="panel-heading"> <div class="col-12 col-lg-5">|| Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  by ALC(pvt) Ltd.<br></div>
                        <div  align="right"> Web Design by<a href="https://www.facebook.com/team176sri/" target="_blank">Team 176</a></div>
                    </div>
                  </div></div>
     
  @endsection