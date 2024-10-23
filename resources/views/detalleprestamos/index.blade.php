@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalles de Préstamo</h2>
    <a href="{{ route('detalleprestamos.create') }}" class="btn btn-success">Agregar Detalle</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Préstamo</th>
                <th>Libro</th>
                <th>Cantidad</th>
                <th>Estado del Libro</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detallePrestamos as $detalle)
                <tr>
                    <td>{{ $detalle->id }}</td>
                    <td>{{ $detalle->prestamo_id }}</td>
                    <td>{{ $detalle->libro_id }}</td>
                    <td>{{ $detalle->cantidad }}</td>
                    <td>{{ $detalle->estado_libro }}</td>
                    <td>
                        <a href="{{ route('detalleprestamos.show', $detalle->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('detalleprestamos.edit', $detalle->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('detalleprestamos.destroy', $detalle->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este detalle?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
