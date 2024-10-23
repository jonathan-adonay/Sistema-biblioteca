{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layouts.app')

{{--Definimos el titulo--}}
@section('title', 'Cliente')

{{--DEfinimos el contenido--}}
@section('content')
    
<h1>Actualizar</h1>
<h5>Formulario para actualizar</h5>
<hr>
<form class="row g-3">
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">nombre</label>
        <input type="text" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">edad</label>
        <input type="number" class="form-control" id="inputAddress" placeholder="">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">categoria 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="">
      </div>
      
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </form>

  <button type="button" class="btn btn-dark">Actualizar</button>
@endsection