@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de la Editorial</h1>

    <div class="card">
        <div class="card-body">
            <h2>{{ $editorial->nombre }}</h2>
            <p><strong>ID:</strong> {{ $editorial->id }}</p>
            <p><strong>Dirección:</strong> {{ $editorial->direccion }}</p>
            <p><strong>Teléfono:</strong> {{ $editorial->telefono }}</p>
            <p><strong>Email:</strong> {{ $editorial->email }}</p>
            <p><strong>Página Web:</strong> <a href="{{ $editorial->pagina_web }}">{{ $editorial->pagina_web }}</a></p>
        </div>
    </div>

    <a href="{{ route('editoriales.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
</div>
@endsection
