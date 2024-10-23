@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Detalle de Préstamo</h2>

    <form action="{{ route('detalleprestamos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="prestamo_id">Préstamo:</label>
            <select name="prestamo_id" id="prestamo_id" class="form-control" required>
                <option value="">Seleccione un préstamo</option>
                @foreach ($prestamos as $prestamo)
                    <option value="{{ $prestamo->id }}">{{ $prestamo->id }} - {{ $prestamo->fecha }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="libro_id">Libro:</label>
            <select name="libro_id" id="libro_id" class="form-control" required>
                <option value="">Seleccione un libro</option>
                @foreach ($libros as $libro)
                    <option value="{{ $libro->id }}">{{ $libro->titulo }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" required min="1">
        </div>

        <div class="form-group">
            <label for="estado_libro">Estado del Libro:</label>
            <select name="estado_libro" id="estado_libro" class="form-control" required>
                <option value="">Seleccione un estado</option>
                <option value="En buen estado">En buen estado</option>
                <option value="Dañado">Dañado</option>
                <option value="Perdido">Perdido</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crear Detalle</button>
        <a href="{{ route('detalleprestamos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
