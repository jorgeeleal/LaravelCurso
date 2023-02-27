    @extends('layout/master')
    
    @section('content')
    
    @include("fragments/subview")

    @foreach ($posts as $item)
        <div>
            <p>{{ $item }}</p>
        </div>
    @endforeach

    <p>{{$name}}</p>
    
    @endsection
    