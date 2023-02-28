@extends('dashboard/layout')

@section('content')

    <div class="container mt-3">
        <a href="{{route('post.index')}}" class="text-decoration-none">Volver</a>
        |
        <a href="{{route('category.create')}}" class="text-decoration-none">Crear Categoría</a>

        <div class="card my-4">
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Slug</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $c)
                            <tr>
                                <td>
                                    {{$c->title}}
                                </td>
                                <td>
                                    {{$c->slug}}
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="{{route('category.edit', $c)}}" class="btn btn-outline-secondary btn-sm" role="button">Actualizar</a>
                                            <a href="{{route('category.show', $c)}}" class="btn btn-outline-success btn-sm" role="button">Ver</a>
                                            
                                        </div>
                                        <div class="col">
                                            <form action="{{route('category.destroy', $c)}}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{$categories->links()}}
    </div>

@endsection