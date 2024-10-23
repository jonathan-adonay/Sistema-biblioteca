{{--Heredemos la estructura del archivo app.blade.php--}}

@extends('./layout.name')

{{--Definimos el titulo--}}
@section('title', 'Inicio')

{{--DEfinimos el contenido--}}
@section('content')
<h1>Pantalla de inicio</h1>
<h1>Nombre y apellido</h1>

    nombre: <b>{{$nombre}}</b>
    <br>
    apellido: <b>{{$apellido}}</b>
@endsection