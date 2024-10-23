@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Editorial</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('editoriales.update', $editorial->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $editorial->nombre) }}" required>
        </div>

        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="{{ old('direccion', $editorial->direccion) }}" required>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{ old('telefono', $editorial->telefono) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $editorial->email) }}" required>
        </div>

        <div class="form-group">
            <label for="pagina_web">Página Web</label>
            <input type="url" name="pagina_web" id="pagina_web" class="form-control" value="{{ old('pagina_web', $editorial->pagina_web) }}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
