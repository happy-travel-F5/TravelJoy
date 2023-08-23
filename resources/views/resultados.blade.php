<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach ($results as $destino)
    <div>
        <h3>{{ $destino->nombre }}</h3>
        <p>{{ $destino->descripcion }}</p>
    </div>
@endforeach
</body>
</html>