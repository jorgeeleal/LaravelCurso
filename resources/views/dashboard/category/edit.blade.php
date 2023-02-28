@extends('dashboard/layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title mb-4">Editar Categoría: {{$category->title}}</h3>

                @include("dashboard/fragments/errors-form")


                <form action="{{ route('category.update', $category->id) }}" method="post" class="mt-3">
                    @csrf
                    @method("PUT")
                    <div class="container">
                        <div class="row">
                            <div class="col-1">
                                <label for="title" class="form-label">Título</label>
                            </div>
                            <div class="col">
                                <input value="{{old('title', $category->title)}}" class="form-control form-control-sm" type="text" placeholder="Título" name="title" >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-1">
                                <label for="slug" class="form-label">Slug</label>
                            </div>
                            <div class="col">
                                <input value="{{$category->slug}}" class="form-control form-control-sm" type="text" placeholder="Slug" name="slug" >
                            </div>
                        </div>
                        <br>
                        <button type='submit' class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection