{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')

{{-- Definimos el título --}}
@section('title', 'Detalles del Préstamo')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-4">
    <h1 class="text-center">Detalles del Préstamo</h1>
    <hr>

    <h5>ID: {{ $prestamo->id }}</h5>
    <p><strong>Libro:</strong> {{ $prestamo->libro->titulo }}</p>
    <p><strong>Usuario:</strong> {{ $prestamo->usuario->nombre }}</p>
    <p><strong>Fecha de Préstamo:</strong> {{ $prestamo->fecha_prestamo }}</p>
    <p><strong>Fecha de Devolución:</strong> {{ $prestamo->fecha_devolucion }}</p>
    <p><strong>Fecha de Devolución Real:</strong> {{ $prestamo->fecha_devolucion_real ?? 'No disponible' }}</p>
    <p><strong>Estado:</strong> {{ $prestamo->estado }}</p>

    <a href="{{ route('prestamos.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
