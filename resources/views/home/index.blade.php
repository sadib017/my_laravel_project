<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h2>{{$greeting}}</h2>

    <ul>
        <a href="/users/{{$users[0]["id"]}}"><li>{{$users[0]["name"]}}</li></a>
        <a href="/users/{{$users[1]["id"]}}"><li>{{$users[1]["name"]}}</li></a>
    </ul>



</body>
</html>
