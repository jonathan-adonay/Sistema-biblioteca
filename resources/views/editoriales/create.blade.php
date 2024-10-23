@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Editoriales</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('editoriales.store') }}" method="POST">
        @csrf
        <!-- Campo de nombre -->
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" pattern="[A-Za-z\s]+" title="Solo se permiten letras" required>
        </div>

        <!-- Campo de dirección -->
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control" required>
        </div>

        <!-- Campo de teléfono -->
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="number" name="telefono" id="telefono" class="form-control" pattern="[0-9]+" title="Solo se permiten números" required>
        </div>

        <!-- Campo de email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <!-- Campo de página web (opcional) -->
        <div class="form-group">
            <label for="pagina_web">Página Web</label>
            <input type="url" name="pagina_web" id="pagina_web" class="form-control" placeholder="https://ejemplo.com">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
