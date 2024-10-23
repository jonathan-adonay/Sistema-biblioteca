@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Detalle de Préstamo</h2>

    <form action="{{ route('detalleprestamos.update', $detallePrestamo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="prestamo_id">Préstamo:</label>
            <select name="prestamo_id" id="prestamo_id" class="form-control" required>
                <option value="">Seleccione un préstamo</option>
                @foreach ($prestamos as $prestamo)
                    <option value="{{ $prestamo->id }}" {{ $prestamo->id == $detallePrestamo->prestamo_id ? 'selected' : '' }}>
                        {{ $prestamo->id }} - {{ $prestamo->fecha }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="libro_id">Libro:</label>
            <select name="libro_id" id="libro_id" class="form-control" required>
                <option value="">Seleccione un libro</option>
                @foreach ($libros as $libro)
                    <option value="{{ $libro->id }}" {{ $libro->id == $detallePrestamo->libro_id ? 'selected' : '' }}>
                        {{ $libro->titulo }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" required min="1" value="{{ $detallePrestamo->cantidad }}">
        </div>

        <div class="form-group">
            <label for="estado_libro">Estado del Libro:</label>
            <select name="estado_libro" id="estado_libro" class="form-control" required>
                <option value="">Seleccione un estado</option>
                <option value="En buen estado" {{ $detallePrestamo->estado_libro == 'En buen estado' ? 'selected' : '' }}>En buen estado</option>
                <option value="Dañado" {{ $detallePrestamo->estado_libro == 'Dañado' ? 'selected' : '' }}>Dañado</option>
                <option value="Perdido" {{ $detallePrestamo->estado_libro == 'Perdido' ? 'selected' : '' }}>Perdido</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Detalle</button>
        <a href="{{ route('detalleprestamos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
