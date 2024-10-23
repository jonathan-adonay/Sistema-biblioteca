{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')

{{-- Definimos el título --}}
@section('title', 'Reporte')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-4" style="background: linear-gradient(to right, #3b5998, #8b9dc3); border-radius: 10px; padding: 20px;">
    <h5 class="text-center text-light">Tabla de Reporte</h5>
    <br>
    <a class="btn btn-danger btn-sm" href="/libros/create">Agregar nuevo reporte</a>
    <hr>
    
    <table class="table table-striped text-light">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre del Reporte</th>
                <th scope="col">Tipo de Reporte</th>
                <th scope="col">Fecha del Reporte</th>
                <th scope="col">Usuario</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($reportes as $item) 
            <tr>
                <td>{{ $item->codigo }}</td>
                <td>{{ $item->nombre_reporte }}</td>
                <td>{{ $item->tipo_reporte }}</td>
                <td>{{ $item->fecha_reporte }}</td>
                <td>{{ $item->usuario }}</td>
                <td>
                    <a class="btn btn-success btn-sm" href="/reportes/edit/{{$item->codigo}}">Modificar</a>
                    <button class="btn btn-danger btn-sm" url="/reortes/destroy/{{$item->codigo}}" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('scripts') 
{{-- SweetAlert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- JS --}}
<script src="{{ asset('js/product.js') }}"></script>
@endsection
