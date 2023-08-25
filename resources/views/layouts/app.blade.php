<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jaldi:wght@400;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/Logo.svg') }}" alt="Register" width="120">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <!--buscador-->
                    <form action="{{ route('search') }}" method="GET" class="d-flex">
        <div class="search-container">
            <input type="text" class="search-input" name='search' placeholder="Search..." />
            <div class="search-icon">
                <img src="{{ asset('images/Glass-icon.svg') }}" alt="Search Icon" />
            </div>
        </div>
    </form>
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                                    <a class="nav-link" href="{{ route('destinations') }}">
                                    <img src="{{ asset('images/Home-icon.svg') }}" alt="Register" width="20">
                                    </a>
                                </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                    <img src="{{ asset('images/Avatar-icon.svg') }}" alt="Register" width="20">
                                    </a>
                                </li>
                            @endif
                        @else

                        <li class="nav-item">
                                    <a class="nav-link" href="{{ route('destinations') }}">
                                    <img src="{{ asset('images/Home-icon.svg') }}" alt="Register" width="20">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('destinations.create') }}">
                                    <img src="{{ asset('images/Create-icon.svg') }}" alt="Register" width="20">
                                    </a>
                                </li>

                            <li class="nav-item">
                                <!-- <a class="nav-link dropdown-toggle" href="#" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                  
                                </a> -->
                                

                                <div class="logout-button">
                                    <a class="nav-link" href="{{ route('logout') }}" href="#" role="button"  aria-haspopup="true" aria-expanded="false" v-pre
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                        <img src="{{ asset('images/Logout-icon.svg') }}" alt="Register" width="25">
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
    </div>
</body>
</html>
