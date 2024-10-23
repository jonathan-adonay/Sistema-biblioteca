@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Libro</h1>

    <form action="{{ route('libros.update', $libro->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo', $libro->titulo) }}" required>
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <input type="text" class="form-control" id="genero" name="genero" value="{{ old('genero', $libro->genero) }}" required>
        </div>

        <div class="mb-3">
    <label for="autor_id" class="form-label">Autor</label>
    <select class="form-select" id="autor_id" name="autor_id" required>
        @foreach($autores as $autor) 
            <option value="{{ $autor->id }}" {{ $autor->id == $libro->autor_id ? 'selected' : '' }}>
                {{ $autor->nombre }}
            </option>
        @endforeach
    </select>
</div>



<div class="mb-3">
    <label for="editorial_id" class="form-label">Editorial</label>
    <select class="form-select" id="editorial_id" name="editorial_id" required>
        @foreach($editoriales as $editorial) 
            <option value="{{ $editorial->id }}" {{ $editorial->id == $libro->editorial_id ? 'selected' : '' }}>
                {{ $editorial->nombre }}
            </option>
        @endforeach
    </select>
</div>


       
        <div class="mb-3">
            <label for="anio_publicacion" class="form-label">Año de Publicación</label>
            <input type="number" class="form-control" id="anio_publicacion" name="anio_publicacion" value="{{ old('anio_publicacion', $libro->anio_publicacion) }}" required>
        </div>


        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion">{{ old('descripcion', $libro->descripcion) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Libro</button>
        <a href="{{ route('libros.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
