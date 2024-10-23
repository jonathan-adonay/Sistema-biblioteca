{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layouts.app')

{{--Definimos el titulo--}}
@section('title', 'Prestamos')

{{--DEfinimos el contenido--}}
@section('content')
    
<h1>Actualizar</h1>
<h5>Formulario de prestamo</h5>
<hr>
<div class="col-md-6">
      <label for="inputPassword4" class="form-label">Usuario</label>
      <input type="text" name="usuario" value="{{$prestamos->usuarios}}" class="form-control" id="inputPassword4">
      @error('usuario') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
      <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Libros</label>
      <input type="text" name="libros" value="{{$libros->libros}}" class="form-control" id="inputPassword4">
      @error('libros') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Fecha de prestamo</label>
      <input type="date" name="fecha_prestamo" value="{{$prestamos->fecha_prestamo}}" class="form-control" id="inputPassword4">
      @error('fecha_prestamo') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Fecha de devolucion</label>
      <input type="date" name="fecha_devolucion" value="{{$prestamos->fecha_devolucion}}" class="form-control" id="inputPassword4">
      @error('fecha_devolucion') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Fecha devolucion real</label>
      <input type="date" name="fecha_devolucion_real" value="{{$prestamos->fecha_devolucion_real}}" class="form-control" id="inputPassword4">
      @error('fecha_prestamo') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Estado</label>
      <input type="text" name="estado" value="{{$prestamos->estado}}" class="form-control" id="inputPassword4">
      @error('estado') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>

  <button type="button" class="btn btn-dark">Actualizar</button>
@endsection