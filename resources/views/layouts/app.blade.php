<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OCP TBs</title>
    <link rel="icon" href="{{asset('assets/img/0.jpg') }}"/>


    <!-- Scripts -->
    <script src="{{ asset('assets/scripts/main.js') }}" defer></script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   
  

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  

    <style>
      canvas#horizontalBarChartCanvas {
  max-width: 768px;
  margin: 40px auto;
}
        * {box-sizing: border-box}
        .mySlides1, .mySlides2 {display: none}
        img {vertical-align: middle;}
        
        /* Slideshow container */
        .slideshow-container {
          max-width: 1000px;
          position: relative;
          margin: auto;
        }
        
        /* Next & previous buttons */
        .prev, .next {
          cursor: pointer;
          position: absolute;
          top: 50%;
          width: auto;
          padding: 16px;
          margin-top: -22px;
          color: white;
          font-weight: bold;
          font-size: 18px;
          transition: 0.6s ease;
          border-radius: 0 3px 3px 0;
          user-select: none;
        }
        
        /* Position the "next button" to the right */
        .next {
          right: 0;
          border-radius: 3px 0 0 3px;
        }
        
        /* On hover, add a grey background color */
        .prev:hover, .next:hover {
          background-color:seagreen;
          color: black;
        }
        </style>
   

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
            <img src="{{asset('assets/img/0.jpg')}}" width="50px"/>
            <span class="border border-success" style="border-radius:10px;border:2;">  <a class="navbar-brand" href="{{ url('/') }}" style="margin-left:10px;color:seagreen;">
                <b>OCP DASHBOARD</b>  </a></span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <button class="btn btn-light" width="20px" style="border-radius:10px;"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                        <img src="{{asset('assets/img/photo.jpeg')}}" style="border-radius:30px;" width="39px"/> &nbsp;&nbsp; <b>{{ Auth::user()->name }} <span class="caret"></span></b>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                           </button> </li>
                        @endguest
                    </ul>&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-light" onclick="openFullscreen();">
                        <img src="{{asset('assets/img/full.png')}}" width="20px">

                          </button>

                <script>
                        var elem = document.documentElement;
                        function openFullscreen() {
                          if (elem.requestFullscreen) {
                            elem.requestFullscreen();
                          } else if (elem.mozRequestFullScreen) { /* Firefox */
                            elem.mozRequestFullScreen();
                          } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
                            elem.webkitRequestFullscreen();
                          } else if (elem.msRequestFullscreen) { /* IE/Edge */
                            elem.msRequestFullscreen();
                          }
                        }
                        
                        
                        </script>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
 
</html>
