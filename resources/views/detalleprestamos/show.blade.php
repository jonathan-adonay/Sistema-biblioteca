@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalle de Préstamo - ID: {{ $detallePrestamo->id }}</h2>

    <div class="card">
        <div class="card-header">
            Información del Detalle de Préstamo
        </div>
        <div class="card-body">
        <p><strong>ID:</strong> {{ $detallePrestamo->id }}</p>
            <p><strong>Préstamo ID:</strong> {{ $detallePrestamo->prestamo_id }}</p>
            <p><strong>Libro ID:</strong> {{ $detallePrestamo->libro_id }}</p>
            <p><strong>Cantidad:</strong> {{ $detallePrestamo->cantidad }}</p>
            <p><strong>Estado del Libro:</strong> {{ $detallePrestamo->estado_libro }}</p>
            <a href="{{ route('detalleprestamos.index') }}" class="btn btn-secondary">Volver a la lista</a>
            <a href="{{ route('detalleprestamos.edit', $detallePrestamo->id) }}" class="btn btn-warning">Editar Detalle</a>
        </div>
    </div>
</div>
@endsection
