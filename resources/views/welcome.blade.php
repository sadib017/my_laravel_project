<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Laravel App</title>
</head>
<body>
    <h1>welcome to my first Laravel app</h1>
    <a href="/login" class="btn">click here</a><br>
    <a href="{{route('about')}}" class="btn2">About</a>




</body>
</html>
