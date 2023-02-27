

@if ($errors->any())
@foreach ($errors->all() as $e)
    <p class="fs-6 fw-lighter text-danger mb-1">*{{$e}}</p>      
@endforeach
@endif