<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
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
                            <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-mobile">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-mobile">About</a>
                                @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
    <!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large">
  <a href="#" class="w3-bar-item w3-button w3-red w3-mobile"><i class="fa fa-firefox w3-margin-right"></i>FoodOn</a>
  <a href="#rooms" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-shopping-cart w3-margin-right"></i>Shops</a>
  <a href="#about" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-plus-circle w3-margin-right"></i>Deals</a>
  @guest
  <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-right w3-mobile">{{ __('Login') }}</a>
  @if (Route::has('register'))
       <a href="{{ route('register') }}" class="w3-bar-item w3-right w3-button w3-mobile"><i class="fa fa-user-plus w3-margin-right"></i>Register</a>
  @endif
  <a href="#contact" class="w3-bar-item w3-button w3-right w3-mobile"><i class="fa fa-play-circle w3-margin-right"></i>Create Shop</a>
  @else
    <a href="#rooms" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile"><i class="fa fa-user-circle w3-margin-right"></i>{{ Auth::user()->name }} <span class="caret"></span></a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile"><i class="fa fa-user-times w3-margin-right"></i>{{ __('Logout') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
  @endguest
</div>
<main>
  @yield('content')
</main>
</body>
</html>
