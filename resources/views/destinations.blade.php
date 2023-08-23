<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Destinations</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="{{ asset('css/destinations.css') }}">  
</head>

<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                   
                </div>
            @endif

<body class="destinations">
    @extends('layouts.app')
    @section('content')
    @foreach ($destinations as $destination)
    <div class="destinations-image"> <img src="{{ $destination->image }}" alt="{{ $destination->title }}" width="100"></div>
    <!-- ... Rest of the HTML ... -->
    <div class="destinations-title">{{ $destination->title }}</div>
    <!-- ... Rest of the HTML ... -->
    <div class="destinations-location">{{ $destination->location }}</div>
    <!-- ... Rest of the HTML ... -->
    @endforeach
    @endsection
</body>
</html>
