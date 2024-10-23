@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Autores</h1>
  
    <a href="/autores/create" class="btn btn-primary">Agregar Autor</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Biografia</th>
                <th>Fecha de nacimiento</th>
                <th>Nacionalidad</th>
                <th>Telefono</th>
                <th>Website</th>
                <th>Foto</th>
                <th>Genero</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($autores as $autor)
            <tr>
                <td>{{ $autor->id }}</td>
                <td>{{ $autor->nombre }}</td>
                <td>{{ $autor->apellido }}</td>
                <td>{{ $autor->biografia }}</td>
                <td>{{ $autor->fecha_nacimiento }}</td>
                <td>{{ $autor->nacionalidad }}</td>
                <!-- <td>{{ $autor->email }}</td> -->
                <td>{{ $autor->telefono }}</td>
                <td>{{ $autor->website }}</td>
                <td>{{ $autor->foto }}</td>
                <td>{{ $autor->genero }}</td>
                <td>
                <a href="{{ route('autores.show', $autor->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('autores.edit', $autor->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('autores.destroy', $autor->id) }}" method="POST" style="display:inline-block;">
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
