{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('layouts.app')

{{--Definimos el titulo--}}
@section('title', 'Acceso_login')

{{--DEfinimos el contenido--}}
@section('content')
    
<h1>Crear</h1>
    <h5>Formulario para crear login</h5>
    <hr>
    <form  class="row g-3">
       
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Correo</label>
          <input type="gmail" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="inputAddress" placeholder="">
        </div>
        
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Ingresar</button>
        </div>
      </form>

      <br>

@endsection