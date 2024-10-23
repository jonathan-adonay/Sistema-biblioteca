{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')

{{-- Definimos el título --}}
@section('title', 'Crear Reporte')

{{-- Definimos el contenido --}}
@section('content')
<div class="container mt-4" style="background: linear-gradient(to right, #3b5998, #8b9dc3); border-radius: 15px; padding: 25px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
    <h1 class="text-center text-light">Crear Reporte</h1>
    <h5 class="text-center text-light">Formulario de Reporte</h5>
    <hr class="bg-light">
    <form class="row g-3">
        <div class="col-md-6">
            <label for="nombre" class="form-label text-light">Nombre del Reporte</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del reporte" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="tipo" class="form-label text-light">Tipo de Reporte</label>
            <input type="text" class="form-control" id="tipo" placeholder="Ingrese el tipo del reporte" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="fecha_reporte" class="form-label text-light">Fecha del Reporte</label>
            <input type="datetime-local" class="form-control" id="fecha_reporte" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
        </div>
        <div class="col-md-6">
            <label for="usuario_id" class="form-label text-light">Usuario</label>
            <select class="form-select" id="usuario_id" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
                <option selected disabled>Seleccione un usuario</option>
                {{-- Aquí irán las opciones de usuarios, que se deben pasar desde el controlador --}}
                <option value="1">Usuario 1</option>
                <option value="2">Usuario 2</option>
                <!-- Más opciones -->
            </select>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-light" style="border-radius: 5px; background-color: #ffffff; color: #3b5998; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">Registrar Reporte</button>
        </div>
    </form>
</div>
@endsection
