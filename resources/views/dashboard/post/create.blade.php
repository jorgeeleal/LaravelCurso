<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creat Post</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Crear Post</h1>

        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="container">
                <input class="form-control form-control-sm" type="text" placeholder="Título" name="title" >
                <br>
                <input class="form-control form-control-sm" type="text" placeholder="Slug" name="slug" >
                <br>
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
                <button type='submit' class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>