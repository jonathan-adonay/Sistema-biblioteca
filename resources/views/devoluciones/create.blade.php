@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Agregar Devolución</h1>

    <form action="{{ route('devoluciones.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="prestamo_id" class="form-label">Préstamo</label>
            <select name="prestamo_id" id="prestamo_id" class="form-select" required>
                <option value="">Seleccione un préstamo</option>    
                @foreach ($prestamos as $prestamo)
                    <option value="{{ $prestamo->id }}">{{ $prestamo->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="fecha_devolucion" class="form-label">Fecha de Devolución</label>
            <input type="date" name="fecha_devolucion" id="fecha_devolucion" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-select" required>
                <option value="completa">Completa</option>
                <option value="pendiente">Pendiente</option>
                <option value="atrasado">Atrasado</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
