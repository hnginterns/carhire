
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="..Get Recent updates in tech indusrty">


  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name') }}</title>


  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <!-- Styles -->
  <link href="{{ asset('css/app.css')}}" rel="stylesheet">
  <style type="text/css">
   html,
body {
   margin:0;
   padding:0;
   height:100%;
}
#app{
  min-height: 100%;
  position: relative;
  margin: 0;
}
#body {
   padding:10px;
   padding-bottom:100px;   /* Height of the footer */
}
#footer-id {
   position:absolute;
   bottom:0;
   width:100%;
   height:100px;   /* Height of the footer */
   opacity: 0.6;
}
  </style>
  <!-- Styles -->

   @yield('meta-links')
</head>
<body>
  <div id="app">
    <nav class="navbar  navbar-fixed-top"  id="navMain">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" id="toggle-button" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          {{-- <a class="navbar-brand" href="/">
            {{ config('app.name', 'Laravel') }}
          </a> --}}
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
            &nbsp;
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right" id="ull">

            <li><a href="#">Home</a></li>
        <li><a href="#about">Location</a></li>
        <li><a href="#">Special Offers</a></li>  
        <li><a href="/car-listing">Cars</a></li>  
        <li><a href="/contact">Contact</a></li>  
        <li><a href="#">Airport Transfer</a></li>   
      </ul>
         
    </div>
  </div>
</nav>
<nav class="navbar navbar-inverse nav2" 
id="nav2" style="margin-top: 200px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
       <a class="navbar-brand image" href="#"><img class="center image" src="http://res.cloudinary.com/siazo/image/upload/v1507562729/car_jyrdnk.png" height="50" width="158"></a>
      
        
   
          <ul class="nav navbar-nav navbar-right" id="ull">

            <!-- Authentication Links -->
            @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a>
           <li><a href="#" class="center rent">Rent a car</a></li>
      <li><a href="#" class="center line ">|</a></li>
      <li><a href="#" class="center new">New cars</a></li>

            </li>
            @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>

            </ul>

          </li>
          <li><a href="#" class="center rent">Rent a car</a></li>
      <li><a href="#" class="center line ">|</a></li>
      <li><a href="#" class="center new">New cars</a></li>
          @endif
        </ul>
    </div>
  </div>
</nav>

<div id="body">
@yield('content')
</div>
 @yield('footer')
</div>
<script src="{{ asset('js/app.js') }}"></script>

  @yield('js')
</body>
</html>

