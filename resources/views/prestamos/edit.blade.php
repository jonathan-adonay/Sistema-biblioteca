{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')

{{-- Definimos el título --}}
@section('title', 'Editar Préstamo')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-4">
    <h1 class="text-center">Editar Préstamo</h1>
    <hr>

    {{-- Formulario con método PUT para actualizar los datos del préstamo --}}
    <form class="row g-3" method="POST" action="{{ route('prestamos.update', $prestamo) }}">
        @csrf
        @method('PUT')
        
        <div class="col-md-6">
            <label for="libro_id" class="form-label">Libro</label>
            <select class="form-select" id="libro_id" name="libro_id" required>
                @foreach($libros as $libro)
                    <option value="{{ $libro->id }}" {{ $prestamo->libro_id == $libro->id ? 'selected' : '' }}>
                        {{ $libro->titulo }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6">
            <label for="usuario_id" class="form-label">Usuario</label>
            <select class="form-select" id="usuario_id" name="usuario_id" required>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ $prestamo->usuario_id == $usuario->id ? 'selected' : '' }}>
                        {{ $usuario->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6">
            <label for="fecha_prestamo" class="form-label">Fecha del Préstamo</label>
            <input type="date" class="form-control" id="fecha_prestamo" name="fecha_prestamo" value="{{ $prestamo->fecha_prestamo }}" required>
        </div>
        
        <div class="col-md-6">
            <label for="fecha_devolucion" class="form-label">Fecha de Devolución</label>
            <input type="date" class="form-control" id="fecha_devolucion" name="fecha_devolucion" value="{{ $prestamo->fecha_devolucion }}" required>
        </div>
        
        <div class="col-md-6">
            <label for="fecha_devolucion_real" class="form-label">Fecha de Devolución Real</label>
            <input type="date" class="form-control" id="fecha_devolucion_real" name="fecha_devolucion_real" value="{{ $prestamo->fecha_devolucion_real }}">
        </div>
        
        <div class="col-md-6">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-select" id="estado" name="estado" required>
                <option value="Pendiente" {{ $prestamo->estado == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="Devuelto" {{ $prestamo->estado == 'Devuelto' ? 'selected' : '' }}>Devuelto</option>
                <option value="Atrasado" {{ $prestamo->estado == 'Atrasado' ? 'selected' : '' }}>Atrasado</option>
            </select>
        </div>

        <div class="col-12 text-center">
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="{{ route('prestamos.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
