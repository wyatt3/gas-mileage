<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/mytheme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @guest
                    @else
                    <ul class="navbar-nav mr-auto">
                            <li><a class="nav-link text-light" href="{{ route('other.about') }}">About</a></li>
                    </ul>
                    @endguest
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="drop nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            
                                <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->role_id == 1)
                                    <a class="dropdown-item text-light" href="{{ route('voyager.dashboard') }}">Admin</a>
                                    @endif
                                    <a class="dropdown-item text-light" href="{{ route('user') }}">Account</a>
                                    <a class="dropdown-item text-light" href="{{ route('logout') }}"
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
        <br><br>
        @if(Session::has('message'))
        <div class="container mt-4 mb-0">
            <div class="row">
                @if(Session::has('bg'))
                <div class="col-md-12">
                    <p class="alert alert-{{ Session::get('bg') }}">{{Session::get('message') }}</p>
                </div>
                @else
                <div class="col-md-12">
                    <p class="alert alert-warning">{{Session::get('message') }}</p>
                </div>
                @endif
            </div>
        </div>
        @endif

        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>
    </div>
    <footer>
        <p class='text-right copyright fixed-bottom'>&copy; Wyatt Johnson <script>document.write(new Date().getFullYear())</script></p>
    </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
