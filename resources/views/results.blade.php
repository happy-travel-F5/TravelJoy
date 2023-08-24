<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach ($results as $result)
    <div>
        <h3>{{ $result->title }}</h3>
        <p>{{ $result->location }}</p>
    </div>
@endforeach
</body>
</html>