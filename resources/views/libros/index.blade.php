@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Libros</h1>
    <a href="/libros/create" class="btn btn-primary">Agregar Nuevo Libro</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Género</th>
                <th>Autor id</th>
                <th>Editorial id</th>
                <th>Año publicación</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
            <tr id="libro-{{ $libro->id }}">
                <td>{{ $libro->id }}</td>
                <td>{{ $libro->titulo }}</td>
                <td>{{ $libro->genero }}</td>
                <td>{{ $libro->autor_id }}</td>
                <td>{{ $libro->editorial_id }}</td>
                <td>{{ $libro->anio_publicacion }}</td>
                <td>{{ $libro->descripcion }}</td>
                <td>
                    <a href="{{ route('libros.show', $libro->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" class="delete-form" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger delete-btn" data-id="{{ $libro->id }}">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@section('scripts')
<script>
document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function() {
        const id = this.getAttribute('data-id');
        const form = this.closest('.delete-form');

        if (confirm('¿Estás seguro de que deseas eliminar este libro?')) {
            fetch(`/libros/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    // Eliminar la fila de la tabla
                    const row = document.getElementById(`libro-${id}`);
                    if (row) {
                        row.remove();
                    }
                    alert('Libro eliminado correctamente.');
                } else {
                    alert('Error al eliminar el libro.');
                }
            })
            .catch(error => console.error('Error:', error));
        }
    });
});
</script>
@endsection
