<!-- resources/views/usuarios/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Usuario</h1>
    <p><strong>ID:</strong> {{ $usuario->id }}</p>
    <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
    <p><strong>Email:</strong> {{ $usuario->email }}</p>
    <p><strong>Contraseña:</strong> {{ $usuario->password }}</p>
    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
