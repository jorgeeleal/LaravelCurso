<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <p>{{$prop}}</p>
    <a href="/contacto">Ir a contacto</a>
    <br>
    <a href="{{route('contacto')}}">Ir a contacto (ruta con nombre)</a>
    <p>{{$user->email}}</p>
</body>
</html>