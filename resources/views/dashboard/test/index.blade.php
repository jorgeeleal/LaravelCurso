<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @include("fragments/subview")

    <h1>{{ $name }}</h1>
    {!! $html !!}
    @if($name == 'HEllos')
        Es true
    @else
        No es true
    @endif

    @foreach ($array as $item)
        <div>
            <p>{{ $item }}</p>
        </div>
    @endforeach

</body>
<script>
    //alert('hola mundo')
</script>
</html>
