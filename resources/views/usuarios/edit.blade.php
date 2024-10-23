<!-- resources/views/usuarios/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Usuario</h1>
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $usuario->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $usuario->email }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" value="{{ $usuario->password }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
