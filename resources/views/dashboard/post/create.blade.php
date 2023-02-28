@extends('dashboard/layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title mb-4">Crear Post</h3>

                @include("dashboard/fragments/errors-form")

                <form action="{{ route('post.store') }}" method="post" class="mt-3">
                    @csrf
                    <div class="container">
                        <input class="form-control form-control-sm" type="text" placeholder="Título" name="title" >
                        <br>
                        {{-- <input class="form-control form-control-sm" type="text" placeholder="Slug" name="slug" >
                        <br> --}}
                        <div class="row">
                            <div class="col-auto">
                                <label for="category_id" class="form-label">Categoría</label>
                            </div>
                            <div class="col">
                                <select class="form-select form-select-sm" name="category_id">
                                    @foreach ($categories as $title => $id)
                                        <option value="{{ $id }}">{{ $title }}</option>
                                    @endforeach
                                </select>    
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-auto">
                                <label for="posted" class="form-label">Posteado</label>
                            </div>
                            <div class="col">
                                <select class="form-select form-select-sm" name="posted">
                                    <option value="not">No</option>
                                    <option value="yes">Sí</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <textarea class="form-control form-control-sm" placeholder="Contenido" name="content"></textarea>
                        <br>
                        <textarea class="form-control form-control-sm" placeholder="Descripción" name="description"></textarea>
                        <br>
                        <button type='submit' class="btn btn-primary">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
