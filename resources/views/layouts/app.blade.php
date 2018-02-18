<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="\Bootstrap\af\dist\css\bootstrap.css" />
    <link rel="stylesheet" href="\Bootstrap\af\dist\css\bootstrap.css" />
    <link rel="stylesheet" href="\Bootstrap\af\dist\css\bootstrap-theme.css" />
    <link rel="stylesheet" href="\Bootstrap\af\dist\css\bootstrap-theme.min.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="col-md-12">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/z') }}"><b>PULAU</b></a>
                    <a class="navbar-brand" href="{{ url('/y') }}"><b>PROVINSI</b></a>
                    <a class="navbar-brand" href="{{ url('/x') }}"><b>KOTA</b></a>
                    <a class="navbar-brand" href="{{ url('/w') }}"><b>KABUPATEN</b></a>
                    <a class="navbar-brand" href="{{ url('/v') }}"><b>SUKU</b></a>
                    <a class="navbar-brand" href="{{ url('/u') }}"><b>KESENIAN</b></a>
                    <a class="navbar-brand" href="{{ url('/t') }}"><b>WISATA</b></a>
                    <a class="navbar-brand" href="{{ url('/s') }}"><b>MAKANAN</b></a>
                    <a class="navbar-brand" href="{{ url('/r') }}"><b>SENJATA</b></a>
                    <a class="navbar-brand" href="{{ url('/q') }}"><b>PAHLAWAN</b></a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar 
                    <ul class="nav navbar-nav navbar-right">
                        Authentication Links 
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    <b>{{ Auth::user()->name }}</b> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
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
                        @endguest
                    </ul>-->
                </div>
            </div>
        </nav>
    @include('template.header')
    @yield('content')
    @include('template.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
