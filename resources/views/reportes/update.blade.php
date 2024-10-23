{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layouts.app')

{{--Definimos el titulo--}}
@section('title', 'Devolucion')

{{--DEfinimos el contenido--}}
@section('content')
    
<h1>Actualizar</h1>
<h5>Formulario de reportes</h5>
<hr>
<div class="col-md-6">
      <label for="inputPassword4" class="form-label">Nombre del Reporte</label>
      <input type="text" name="nombre_reporte" value="{{$reportes->nombre_reporte}}" class="form-control" id="inputPassword4">
      @error('nombre_reporte') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Tipo de Reporte</label>
      <input type="text" name="tipo_reporte" value="{{$reportes->tipo_reporte}}" class="form-control" id="inputPassword4">
      @error('tipo_reporte') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Fecha del Reporte</label>
      <input type="text" name="fecha_reporte" value="{{$reportes->fecha_reporte}}" class="form-control" id="inputPassword4">
      @error('fecha_reporte') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Usuario</label>
      <input type="text" name="usuario" value="{{$reportes->usuario}}" class="form-control" id="inputPassword4">
      @error('usuario') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>

  <button type="button" class="btn btn-dark">Actualizar</button>
@endsection