@extends('dashboard/layout')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Categoría: </h2>
        <div class="card">
            <div class="card-body">
                <p class="card-title fs-4">Título: {{$category->title}}</p>
                <p>Slug: <span class="fw-lighter fst-italic">{{$category->slug}}</span></p>
            </div>
        </div>
    </div>
@endsection