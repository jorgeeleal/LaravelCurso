@csrf
<div class="container">
    <div class="row">
        <div class="col-1">
            <label for="title" class="form-label">Título</label>
        </div>
        <div class="col">
            <input value="{{old('title', $post->title)}}" class="form-control form-control-sm" type="text" placeholder="Título" name="title" >
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-1">
            <label for="slug" class="form-label">Slug</label>
        </div>
        <div class="col">
            <input value="{{$post->slug}}" class="form-control form-control-sm" type="text" placeholder="Slug" name="slug" >
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-1">
            <label for="category_id" class="form-label">Categoría</label>
        </div>
        <div class="col">
            <select class="form-select form-select-sm" name="category_id" defaultValue="{{$post->category_id}}">
                @foreach ($categories as $title => $id)
                    <option {{old('category_id', $post->category_id) == $id ? 'selected':''}} value="{{ $id }}">{{ $title }}</option>
                @endforeach
            </select>    
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-1">
            <label for="posted" class="form-label">Posteado</label>
        </div>
        <div class="col">
            <select class="form-select form-select-sm" name="posted" defaultValue="{{$post->posted}}">
                <option {{old('posted', $post->posted) == 'not' ? 'selected':''}} value="not">No</option>
                <option {{old('posted', $post->posted) == 'yes' ? 'selected':''}} value="yes">Sí</option>
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-1">
            <label for="content" class="form-label">Contenido</label>
        </div>
        <div class="col">
            <textarea class="form-control form-control-sm" placeholder="Contenido" name="content">{{old('content', $post->content)}}</textarea>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-1">
            <label for="description" class="form-label">Descripción</label>
        </div>
        <div class="col">
            <textarea class="form-control form-control-sm" placeholder="Descripción" name="description">{{old('description', $post->description)}}</textarea>
        </div>
    </div>
    <br>
    <button type='submit' class="btn btn-primary">Enviar</button>
</div>