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
      <label for="inputPassword4" class="form-label">Nombre</label>
      <input type="text" name="nombre" value="{{$editoriales->nombre}}" class="form-control" id="inputPassword4">
      @error('nombre') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Direccion</label>
      <input type="text" name="direccion" value="{{$editoriales->direccion}}" class="form-control" id="inputPassword4">
      @error('direeccion) 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Telefono</label>
      <input type="number" name="telefono" value="{{$editoriales->telefono}}" class="form-control" id="inputPassword4">
      @error('telefono) 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Email</label>
      <input type="email" name="email" value="{{$editoriales->email}}" class="form-control" id="inputPassword4">
      @error('direeccion) 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Pagina web</label>
      <input type="text" name="paginaweb" value="{{$editoriales->paginaweb}}" class="form-control" id="inputPassword4">
      @error('direeccion) 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>


  <button type="button" class="btn btn-dark">Actualizar</button>
@endsection