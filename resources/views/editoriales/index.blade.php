@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editoriales</h1>
    <a href="/editoriales/create" class="btn btn-primary">Crear Editorial</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($editoriales as $editorial)
                <tr>
                    <td>{{ $editorial->id }}</td>
                    <td>{{ $editorial->nombre }}</td>
                    <td>{{ $editorial->direccion }}</td>
                    <td>{{ $editorial->telefono }}</td>
                    <td>{{ $editorial->email }}</td>
                    <td>
                        <a href="{{ route('editoriales.show', $editorial->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('editoriales.edit', $editorial->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('editoriales.destroy', $editorial->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
