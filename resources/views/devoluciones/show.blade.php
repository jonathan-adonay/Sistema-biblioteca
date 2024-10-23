@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Devolución</h1>
    
    <p><strong>ID:</strong> {{ $devolucion->id }}</p>
    <p><strong>Préstamo:</strong> {{ $devolucion->prestamo->id ?? 'No asignado' }}</p>
    <p><strong>Fecha de Devolución:</strong> {{ $devolucion->fecha_devolucion }}</p>
    <p><strong>Estado:</strong> {{ $devolucion->estado }}</p>

    <a href="{{ route('devoluciones.index') }}" class="btn btn-primary">Regresar</a>
</div>
@endsection
