@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Recordatorios</h1>

    <a href="/recordatorios/create" class="btn btn-success mb-3">Crear Nuevo Recordatorio</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Libro</th>
                <th>Mensaje</th>
                <th>Fecha del Recordatorio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recordatorios as $recordatorio)
                <tr>
                    <td>{{ $recordatorio->id }}</td>
                    <td>{{ $recordatorio->usuario->nombre }}</td>
                    <td>{{ $recordatorio->libro ? $recordatorio->libro->titulo : 'N/A' }}</td>
                    <td>{{ $recordatorio->mensaje }}</td>
                    <td>{{ $recordatorio->fecha_recordatorio }}</td>
                    <td>
                        <a href="{{ route('recordatorios.show', $recordatorio->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('recordatorios.edit', $recordatorio->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('recordatorios.destroy', $recordatorio->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $recordatorios->links() }} <!-- Paginación -->
</div>
@endsection
