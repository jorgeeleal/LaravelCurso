@extends('dashboard/layout')

@section('content')

    <div class="container mt-3">
        <a href="{{route('post.create')}}" class="text-decoration-none">Crear</a>

        <div class="card my-4">
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Categoría</th>
                            <th>Posted</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $p)
                            <tr>
                                <td>
                                    {{$p->title}}
                                </td>
                                <td>
                                    {{$p->category_id}}
                                </td>
                                <td>
                                    {{$p->posted}}
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="{{route('post.edit', $p)}}" class="btn btn-outline-secondary btn-sm" role="button">Actualizar</a>
                                            <a href="{{route('post.show', $p)}}" class="btn btn-outline-success btn-sm" role="button">Ver</a>
                                            
                                        </div>
                                        <div class="col">
                                            <form action="{{route('post.destroy', $p)}}" method="post">
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
        {{$posts->links()}}
    </div>

@endsection