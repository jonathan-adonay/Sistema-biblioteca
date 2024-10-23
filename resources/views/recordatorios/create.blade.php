@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Recordatorio</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('recordatorios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="usuario_id">Usuario:</label>
            <select name="usuario_id" class="form-control" id="usuario_id" required>
            <option value="" disabled selected>Seleccione un usuario</option>
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="libro_id">Libro:</label>
            <select name="libro_id" class="form-control" id="libro_id" required>
            <option value="" disabled selected>Seleccione un libro</option>
                @foreach ($libros as $libro)
                    <option value="{{ $libro->id }}">{{ $libro->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <input type="text" name="mensaje" class="form-control" id="mensaje" required>
        </div>
        <div class="form-group">
            <label for="fecha_recordatorio">Fecha del Recordatorio:</label>
            <input type="date" name="fecha_recordatorio" class="form-control" id="fecha_recordatorio" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Recordatorio</button>
        <a href="{{ route('recordatorios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
