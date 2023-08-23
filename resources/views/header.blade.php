<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Destinations</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">

    
</head>

<body class="header">
<header>
        <div class="logo">
        <img src="{{ asset('images/Logo.svg') }}" alt="Logo-happy-travel">
        
        </div>
        <navbar>
            <form class="search-form">
                <!-- Código para el buscador aquí -->
            </form>
            <a href="#" class="home-icon">
                <img src="{{ asset('images/Home-icon.svg') }}" alt="Home">
                
                    <!-- Icono de home aquí -->
            </a>

            <a href="#" class="user-icon">
                    <img src="{{ asset('images/Avatar-icon.svg') }}" alt="Avatar">
            </a>
             
            <hr class="divider">
        </navbar>
    </header>
</body>
</html>
