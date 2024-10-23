@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Autor</h1>

    <!-- Verificar si hay errores -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('autores.update', $autor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $autor->nombre) }}" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellidos" class="form-control" value="{{ old('apellido', $autor->apellido) }}" required>
        </div>

        <div class="form-group">
            <label for="biografia">Biografia</label>
            <input type="text" name="biografia" id="biografia" class="form-control" value="{{ old('biografia', $autor->biografia) }}" required>
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento">Fecha nacimiento</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento', $autor->fecha_nacimiento) }}" required>
        </div>

        <div class="form-group">
            <label for="nacionalidad">Nacionalidad</label>
            <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" value="{{ old('nacionalidad', $autor->nacionalidad) }}" required>
        </div>


        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="number" name="telefono" id="telefono" class="form-control" value="{{ old('telefono', $autor->telefono) }}" required>
        </div>

        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" name="website" id="website" class="form-control" value="{{ old('website', $autor->website) }}" required>
        </div>

        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="text" name="foto" id="foto" class="form-control" value="{{ old('foto', $autor->foto) }}" required>
        </div>

        <div class="form-group">
            <label for="genero">Genero</label>
            <input type="text" name="genero" id="genero" class="form-control" value="{{ old('genero', $autor->genero) }}" required>
        </div>

        <!-- Agrega más campos según sea necesario -->

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
