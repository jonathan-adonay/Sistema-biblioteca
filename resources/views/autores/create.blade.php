@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Autor</h1>
    <form action="{{ route('autores.store') }}" method="POST">
        @csrf
        <!-- Campo de Nombre solo acepta texto -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" pattern="[A-Za-z\s]+" title="Solo se permiten letras" required>
        </div>
        <!-- Campo de Apellido solo acepta texto -->
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control" pattern="[A-Za-z\s]+" title="Solo se permiten letras" required>
        </div>
        <!-- Campo de Biografía puede aceptar cualquier texto -->
        <div class="mb-3">
            <label for="biografia" class="form-label">Biografía</label>
            <textarea name="biografia" class="form-control" required></textarea>
        </div>
        <!-- Fecha de nacimiento -->
        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required>
        </div>
        <!-- Campo de Nacionalidad solo acepta texto -->
        <div class="mb-3">
            <label for="nacionalidad" class="form-label">Nacionalidad</label>
            <input type="text" name="nacionalidad" class="form-control" pattern="[A-Za-z\s]+" title="Solo se permiten letras" required>
        </div>
 

        <!-- Campo de Teléfono solo permite números -->
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="tel" name="telefono" class="form-control" pattern="[0-9]+" title="Solo se permiten números" required>
        </div>
        <!-- Campo de Website debe ser una URL válida -->
        <div class="mb-3">
            <label for="website" class="form-label">Website</label>
            <input type="url" name="website" class="form-control" required>
        </div>
        <!-- Campo de Foto (URL de imagen) debe ser una URL válida -->
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="url" name="foto" class="form-control" required>
        </div>
        <!-- Selección de Género -->
        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <select class="form-select" id="genero" name="genero" required>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('autores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
