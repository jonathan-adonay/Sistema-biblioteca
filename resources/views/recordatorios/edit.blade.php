@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Recordatorio</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('recordatorios.update', $recordatorio->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Método PUT para actualización -->
        
        <div class="form-group">
            <label for="usuario_id">Usuario:</label>
            <select name="usuario_id" class="form-control" id="usuario_id" required>
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ $recordatorio->usuario_id == $usuario->id ? 'selected' : '' }}>
                        {{ $usuario->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="libro_id">libro:</label>
            <select name="libro_id" class="form-control" id="libro_id" required>
                @foreach ($libros as $libro)
                    <option value="{{ $libro->id }}" {{ $recordatorio->libro_id == $libro->id ? 'selected' : '' }}>
                        {{ $libro->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <input type="text" name="mensaje" class="form-control" id="mensaje" value="{{ $recordatorio->mensaje }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_recordatorio">Fecha del Recordatorio:</label>
            <input type="date" name="fecha_recordatorio" class="form-control" id="fecha_recordatorio" value="{{ $recordatorio->fecha_recordatorio->format('Y-m-d') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Recordatorio</button>
        <a href="{{ route('recordatorios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
