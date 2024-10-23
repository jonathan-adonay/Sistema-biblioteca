{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')

{{-- Definimos el título --}}
@section('title', 'Autores')

{{-- Definimos el contenido --}}
@section('content')
<div class="container">
    <h1>Detalle de Autor</h1>

    <div class="card">
        <div class="card-body">
            <h2>{{ $autor->nombre }}</h2>
            <h2>{{ $autor->apellido }}</h2>
            <p><strong>ID:</strong> {{ $autor->id }}</p>
            <p><strong>Nombre:</strong> {{ $autor->nombre }}</p>
            <p><strong>Biografia:</strong> {{ $autor->biografia }}</p>
            <p><strong>Fecha nacimiento:</strong> {{ $autor->fecha_nacimiento }}</p>
            <p><strong>Nacionalidad:</strong> {{ $autor->nacionalidad }}</p>
            <!-- <p><strong>Email:</strong> {{ $autor->email }}</p> -->
            <p><strong>Telefono:</strong> {{ $autor->telefono }}</p>
            <p><strong>Website:</strong> {{ $autor->website }}</p>
            <p><strong>Foto:</strong> {{ $autor->foto }}</p>
            <p><strong>Genero:</strong> {{ $autor->genero }}</p>
        </div>
    </div>

    <a href="{{ route('autores.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
</div>
@endsection
