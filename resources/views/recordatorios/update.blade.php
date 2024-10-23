{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layouts.app')

{{--Definimos el titulo--}}
@section('title', 'Recordatorios')

{{--DEfinimos el contenido--}}
@section('content')
    
<h1>Actualizar</h1>
<h5>Formulario de Recordatorio</h5>
<hr>

<div class="col-md-6">
      <label for="inputPassword4" class="form-label">Usuario id</label>
      <input type="date" name="usuario_id" value="{{$recordatorios->usuario_id}}" class="form-control" id="inputPassword4">
      @error('usuario_id') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Libro id</label>
      <input type="date" name="libro_id" value="{{$recordatorios->libro_id}}" class="form-control" id="inputPassword4">
      @error('libro_id') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>

<div class="col-md-6">
      <label for="inputPassword4" class="form-label">Mensaje</label>
      <input type="text" name="mensaje" value="{{$recordatorios->mensaje}}" class="form-control" id="inputPassword4">
      @error('mensaje') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
</div>
      <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Fecha de recordatorio</label>
      <input type="date" name="fecha_recordatorio" value="{{$recordatorios->fecha_recordatorio}}" class="form-control" id="inputPassword4">
      @error('fecha_recordatorio') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>

  <button type="button" class="btn btn-dark">Actualizar</button>
@endsection