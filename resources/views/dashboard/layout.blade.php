<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        @if (session('status'))
            <p class="{{session('status') == 'Registro eliminado.' ? 'text-danger' : 'text-success'}}">{{session('status')}}</p>
        @endif
    </div>
    @yield('content')
</body>
</html>

