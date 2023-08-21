<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Destinations</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="{{ asset('css/destinations.css') }}">

    
</head>
<body class="destinations">
    @foreach ($destinations as $destination)
    <div class="image">{{ $destination->image }}</div>
    <!-- ... Rest of the HTML ... -->
    <div class="title">{{ $destination->title }}</div>
    <!-- ... Rest of the HTML ... -->
    <div class="artist">{{ $destination->location }}</div>
    <!-- ... Rest of the HTML ... -->
    @endforeach
</body>
</html>
