@extends('dashboard/layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title mb-4">Crear Categoría</h3>

                @include("dashboard/fragments/errors-form")

                <form action="{{ route('category.store') }}" method="post" class="mt-3">
                    @csrf
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
                        <button type='submit' class="btn btn-primary">Enviar</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection
