@extends('dashboard/layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title mb-4">Crear Post</h3>

                @include("dashboard/fragments/errors-form")

                <form action="{{ route('post.store') }}" method="post" class="mt-3">

                    @include('dashboard/fragments/form-post')
                    
                </form>
            </div>
        </div>
    </div>
@endsection
