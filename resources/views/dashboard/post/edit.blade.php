@extends('dashboard/layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title mb-4">Editar Post: {{$post->title}}</h3>

                @include("dashboard/fragments/errors-form")

                <form action="{{ route('post.update', $post->id) }}" method="post" class="mt-3" enctype="multipart/form-data">
                    @method("PUT")

                    @include('dashboard/fragments/form-post', ["task" => "edit"])
                    
                </form>
            </div>
        </div>
    </div>
@endsection