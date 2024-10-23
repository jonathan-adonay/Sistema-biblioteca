@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-light">Crear Préstamo</h2>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('prestamos.store') }}" method="POST">
        @csrf
            <div class="col-md-6">
                <label for="libro_id" class="form-label text-light">Libro</label>
                <select class="form-select" id="libro_id" name="libro_id" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
                    <option selected disabled>Seleccione un libro</option>
        
                    @foreach($libros as $libro)
                        <option value="{{ $libro->id }}">{{ $libro->titulo }}</option>
                        
                    @endforeach
                </select>
                @error('libro_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="usuario_id" class="form-label text-light">Usuario</label>
                <input class="form-text" id="usuario_id" name="usuario_id" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
                <!-- @error('usuario_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror -->
            </div>
       
            <div class="col-md-6">
                <label for="fecha_prestamo" class="form-label text-light">Fecha de Préstamo</label>
                <input type="date" class="form-control" id="fecha_prestamo" name="fecha_prestamo" required>
                @error('fecha_prestamo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
    

            <div class="col-md-6">
                <label for="fecha_devolucion" class="form-label text-light">Fecha de Devolución</label>
                <input type="date" class="form-control" id="fecha_devolucion" name="fecha_devolucion" required>
                @error('fecha_devolucion')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="fecha_devolucion" class="form-label text-light">Fecha devolucion real</label>
                <input type="date" class="form-control" id="fecha_devolucion_real" name="fecha_devolucion_real" required>
                @error('fecha_devolucion_real')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        

        <div class="row mt-3">
            <div class="col-md-6">
                <label for="estado" class="form-label text-light">Estado</label>
                <select class="form-select" id="estado" name="estado" required style="border: 1px solid #ffffff; border-radius: 5px; background-color: #f5f5f5;">
                    <option value="Activo">Activo</option>
                    <option value="Devuelto">Devuelto</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="Atrasado">Atrasado</option>
                </select>
                @error('estado')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Guardar Préstamo</button>
            <a href="{{ route('prestamos.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
