{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')

{{-- Definimos el título --}}
@section('title', 'Listado de Préstamos')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-4">
    <h1 class="text-center">Listado de Préstamos</h1>
    <a href="/prestamos/create" class="btn btn-primary mb-3">Crear Nuevo Préstamo</a>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Libro</th>
                <th>Usuario</th>
                <th>Fecha de Préstamo</th>
                <th>Fecha devolucion real</th>
                <th>Fecha de Devolución</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prestamos as $prestamo)
                <tr>
                    <td>{{ $prestamo->id }}</td>
                    <td>{{ $prestamo->libro->titulo }}</td>
                    <td>{{ $prestamo->usuario->nombre }}</td>
                    <td>{{ $prestamo->fecha_prestamo }}</td>
                    <td>{{ $prestamo->fecha_devolucion }}</td>
                    <th>{{ $prestamo->fecha_devolucion_real}}</td>
                    <th>{{ $prestamo->estado}}</td>
                    </th>
                    <td>{{ $prestamo->estado }}</td>
                    <td>
                        <a href="{{ route('prestamos.show', $prestamo) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('prestamos.edit', $prestamo) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('prestamos.destroy', $prestamo) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
