@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Libro</h1>

    <div class="card">
        <div class="card-header">
            {{ $libro->titulo }}
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Titulo:</strong> {{ $libro->titulo }}</p>
            <p class="card-text"><strong>Género:</strong> {{ $libro->genero }}</p>
            <h5 class="card-title">Autor: {{ $libro->autor_id }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Editorial: {{ $libro->editorial_id }}</h6>
            <p class="card-text"><strong>Año de Publicación:</strong> {{ $libro->anio_publicacion }}</p>
            <p class="card-text"><strong>Descripción:</strong> {{ $libro->descripcion }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-warning">Editar</a>
            <a href="{{ route('libros.index') }}" class="btn btn-secondary">Regresar a la Lista</a>
        </div>
    </div>
</div>
@endsection
