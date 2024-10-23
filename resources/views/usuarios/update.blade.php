{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layouts.app')

{{--Definimos el titulo--}}
@section('title', 'Usuarios')

{{--DEfinimos el contenido--}}
@section('content')
    
<h1>Actualizar</h1>
<h5>Formulario de usuarios</h5>
<hr>
<div class="col-md-6">
      <label for="inputPassword4" class="form-label">Nombre</label>
      <input type="text" name="nombre" value="{{$usuarios->nombre}}" class="form-control" id="inputPassword4">
      @error('nombre') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Email</label>
      <input type="email" name="email" value="{{$usuaios->email}}" class="form-control" id="inputPassword4">
      @error('email') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Contraseña</label>
      <input type="password" name="password" value="{{$usuarios->password}}" class="form-control" id="inputPassword4">
      @error('password') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>

  <button type="button" class="btn btn-dark">Actualizar</button>
@endsection