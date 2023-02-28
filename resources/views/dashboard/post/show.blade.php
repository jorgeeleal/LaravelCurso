@extends('dashboard/layout')

@section('content')
    <div class="container mt-5">

        <h3 class="text-capitalize text-center mb-5">{{$post->title}}</h3>

        <div class="row">
            <div class="col">
                <p class="fw-lighter fst-italic">{{$post->description}}</p>
            </div>
            <div class="col-auto">
                <p class="">Posted: <span class="fw-semibold">{{$post->posted}}</span> </p>
            </div>
        </div>
        <p class="">{{$post->content}}</p>
    </div>
@endsection