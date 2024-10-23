@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Nuevo Libro</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <!-- Campo de título con validación de texto -->
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" placeholder="Ingrese un titulo sin numero ni simbolos" class="form-control" id="titulo" required maxlength="255" pattern="[A-Za-z\s]+">
            <small class="form-text text-muted">Solo letras y espacios permitidos.</small>
        </div>

        <!-- Campo de género con validación de texto -->
        <div class="form-group">
            <label for="genero">Género</label>
            <input type="text" name="genero" class="form-control" placeholder="Ingrese genenero de libro " id="genero" maxlength="255" pattern="[A-Za-z\s]+">
            <small class="form-text text-muted">Solo letras y espacios permitidos.</small>
        </div>

        <!-- Campo de autor -->
        <div class="form-group">
            <label for="autor_id">Autor</label>
            <select name="autor_id" class="form-control" id="autor_id" required>
                @foreach ($autores as $autor)
                    <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
                @endforeach
            </select>
        </div>

        <!-- Campo de año de publicación -->
        <div class="form-group">
            <label for="anio_publicacion">Año de Publicación</label>
            <input type="number" name="anio_publicacion" class="form-control" id="anio_publicacion" min="1900" max="{{ date('Y') }}">
        </div>

        <!-- Campo de editorial -->
        <div class="form-group">
            <label for="editorial_id">Editorial</label>
            <select name="editorial_id" class="form-control" id="editorial_id" required>
                @foreach ($editoriales as $editorial)
                    <option value="{{ $editorial->id }}">{{ $editorial->nombre }}</option>
                @endforeach
            </select>
        </div>

        <!-- Campo de descripción -->
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control" id="descripcion" maxlength="1000"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Libro</button>
        <a href="{{ route('libros.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
