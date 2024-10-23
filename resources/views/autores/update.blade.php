{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layouts.app')

{{--Definimos el titulo--}}
@section('title', 'Autor')

{{--DEfinimos el contenido--}}
@section('content')
    
<h1>Actualizar</h1>
<h5>Formulario para actores</h5>
<hr>
<form class="row g-3" action="/autor/update/{{$autor->edad}}" method="POST">
  @csrf
  @method('PUT')  
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Nombre</label>
      <input type="text" name="nombre" value="{{$autor->nombre}}" class="form-control" id="inputPassword4">
      @error('nombre') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">apellido</label>
      <input type="text" name="apellido" value="{{$autor->apellido}}" class="form-control" id="inputPassword4">
      @error('apellidos') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Biografia</label>
      <input type="text" name="biografia" value="{{$autor->biografia}}" class="form-control" id="inputPassword4">
      @error('biografia') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Fecha nacimiento</label>
      <input type="text" name="fecha_nacimiento" value="{{$autor->fecha_nacimiento}}" class="form-control" id="inputPassword4">
      @error('fecha_nacimiento') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Nacionalidad</label>
      <input type="text" name="nacionalidad" value="{{$autor->nacionalidad}}" class="form-control" id="inputPassword4">
      @error('nacionalidad') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Email</label>
      <input type="text" name="email" value="{{$autor->email}}" class="form-control" id="inputPassword4">
      @error('email') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Telefono</label>
      <input type="text" name="telefono" value="{{$autor->telefono}}" class="form-control" id="inputPassword4">
      @error('telefono') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Website</label>
      <input type="text" name="website" value="{{$autor->website}}" class="form-control" id="inputPassword4">
      @error('website') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Foto</label>
      <input type="text" name="foto" value="{{$autor->foto}}" class="form-control" id="inputPassword4">
      @error('foto') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>
  <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Genero</label>
      <input type="text" name="genero" value="{{$autor->genero}}" class="form-control" id="inputPassword4">
      @error('genero') 
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span> 
      @enderror 
  </div>

  <button type="submit" class="btn btn-dark">Actualizar</button>
</form>
@endsection