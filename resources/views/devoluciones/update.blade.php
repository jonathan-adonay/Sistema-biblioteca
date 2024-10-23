{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layouts.app')

{{--Definimos el titulo--}}
@section('title', 'Devolucion')

{{--DEfinimos el contenido--}}
@section('content')
    
<h1>Actualizar</h1>
<h5>Formulario de devolucion</h5>
<hr>
<div class="col-md-6">
      <label for="inputPassword4" class="form-label">Prestamo id</label>
      <input type="text" name="prestamo_id" value="{{$devoluciones->prestamo_id}}" class="form-control" id="inputPassword4">
      @error('prestamo_id') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
<div class="col-md-6">
      <label for="inputPassword4" class="form-label">Fecha de devoluciones</label>
      <input type="date" name="fecha_devolucion" value="{{$devoluciones->fecha_devolucion}}" class="form-control" id="inputPassword4">
      @error('fecha_devolucion') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Estado de libro</label>
      <input type="text" name="estado" value="{{$devoluciones->estado}}" class="form-control" id="inputPassword4">
      @error('estado_libro') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>

  <button type="button" class="btn btn-dark">Actualizar</button>
@endsection