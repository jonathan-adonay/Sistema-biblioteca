@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Devolución</h1>

    <form action="{{ route('devoluciones.update', $devolucion->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="prestamo_id">Préstamo</label>
            <select name="prestamo_id" id="prestamo_id" class="form-control" required>
                <option value="">Selecciona un préstamo</option>
                @foreach ($prestamos as $prestamo)
                    <option value="{{ $prestamo->id }}" {{ $prestamo->id == $devolucion->prestamo_id ? 'selected' : '' }}>{{ $prestamo->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fecha_devolucion">Fecha de Devolución</label>
            <input type="date" name="fecha_devolucion" id="fecha_devolucion" class="form-control" value="{{ $devolucion->fecha_devolucion }}" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="Devuelto" {{ $devolucion->estado == 'Devuelto' ? 'selected' : '' }}>Devuelto</option>
                <option value="No devuelto" {{ $devolucion->estado == 'No devuelto' ? 'selected' : '' }}>No devuelto</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Actualizar Devolución</button>
    </form>
</div>
@endsection
