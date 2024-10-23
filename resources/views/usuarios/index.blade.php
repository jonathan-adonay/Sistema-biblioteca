<!-- resources/views/usuarios/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Usuarios</h1>
    <a href="/usuarios/create" class="btn btn-primary">Crear Nuevo Usuario</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>password</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->password }}</td>
                <td>
                    <a href="{{ route('usuarios.show', $usuario->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
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
