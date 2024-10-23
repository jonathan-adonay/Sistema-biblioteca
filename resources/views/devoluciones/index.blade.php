@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Devoluciones</h1>
    <a href="/devoluciones/create" class="btn btn-primary mb-3">Agregar Devolución</a>
    
    @if ($devoluciones->isEmpty())
        <div class="alert alert-warning" role="alert">
            No hay devoluciones registradas.
        </div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Préstamo</th>
                    <th>Fecha de Devolución</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($devoluciones as $devolucion)
                <tr>
                    <td>{{ $devolucion->id }}</td>
                    <td>{{ $devolucion->prestamo->id ?? 'No asignado' }}</td>
                    <td>{{ $devolucion->fecha_devolucion }}</td>
                    <td>{{ $devolucion->estado }}</td>
                    <td>
                        <a href="{{ route('devoluciones.show', $devolucion->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('devoluciones.edit', $devolucion->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('devoluciones.destroy', $devolucion->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta devolución?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
