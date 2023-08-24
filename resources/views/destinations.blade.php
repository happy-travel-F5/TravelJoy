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
    <div class="destinations-grid">
    @foreach ($destinations as $destination)
  
        
            <a href="{{ route('destinations.show', ['id' => $destination->id]) }}" class="destinations-container">
                <img class="destinations-img" src="{{ $destination->image }}" alt="{{ $destination->title }}">
                <div class="destinations-info">
                    <div class="destinations-title">{{ $destination->title }}</div>
                    <div class="destinations-location">{{ $destination->location }}</div>
                </div>
            </a>
    @endforeach
    @endsection
</body>
</html>
