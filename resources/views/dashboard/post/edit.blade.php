@extends('dashboard/layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title mb-4">Editar Post: {{$post->title}}</h3>

                @include("dashboard/fragments/errors-form")

                <form action="{{ route('post.update', $post->id) }}" method="post" class="mt-3">
                    @csrf
                    @method("PUT")

                    <div class="container">
                        <div class="row">
                            <div class="col-auto">
                                <label for="title" class="form-label">Título</label>
                            </div>
                            <div class="col">
                                <input value="{{$post->title}}" class="form-control form-control-sm" type="text" placeholder="Título" name="title" >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-auto">
                                <label for="slug" class="form-label">Slug</label>
                            </div>
                            <div class="col">
                                <input value="{{$post->slug}}" class="form-control form-control-sm" type="text" placeholder="Slug" name="slug" >
                            </div>
                        </div>
                        <br>
                        {{-- <input class="form-control form-control-sm" type="text" placeholder="Slug" name="slug" >
                        <br> --}}
                        <div class="row">
                            <div class="col-auto">
                                <label for="category_id" class="form-label">Categoría</label>
                            </div>
                            <div class="col">
                                <select class="form-select form-select-sm" name="category_id" defaultValue="{{$post->category_id}}">
                                    @foreach ($categories as $title => $id)
                                        <option {{$post->category_id == $id ? 'selected': ''}} value="{{ $id }}">{{ $title }}</option>
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
                                <select class="form-select form-select-sm" name="posted" defaultValue="{{$post->posted}}">
                                    <option {{$post->posted == 'not' ? 'selected': ''}} value="not">No</option>
                                    <option {{$post->posted == 'yes' ? 'selected': ''}} value="yes">Sí</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-auto">
                                <label for="content" class="form-label">Contenido</label>
                            </div>
                            <div class="col">
                                <textarea class="form-control form-control-sm" placeholder="Contenido" name="content">{{$post->content}}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-auto">
                                <label for="description" class="form-label">Descripción</label>
                            </div>
                            <div class="col">
                                <textarea class="form-control form-control-sm" placeholder="Descripción" name="description">{{$post->description}}</textarea>
                            </div>
                        </div>
                        <br>
                        <button type='submit' class="btn btn-primary">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection