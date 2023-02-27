    @extends('layout/master')
    
    @section('content')
    
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
    
    @endsection
    