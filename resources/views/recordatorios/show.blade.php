@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Recordatorio</h1>

    <p><strong>ID:</strong> {{ $recordatorio->id }}</p>
    <p><strong>Usuario:</strong> {{ $recordatorio->usuario->nombre }}</p>
    <p><strong>Libro:</strong> {{ $recordatorio->libro ? $recordatorio->libro->titulo : 'N/A' }}</p>
    <p><strong>Mensaje:</strong> {{ $recordatorio->mensaje }}</p>
    <p><strong>Fecha del Recordatorio:</strong> {{ $recordatorio->fecha_recordatorio->format('d/m/Y H:i') }}</p> <!-- Formato de fecha -->
    
    <a href="{{ route('recordatorios.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
