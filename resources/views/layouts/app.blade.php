<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Biblioteca') }}</title>
    <link rel="icon" href="{{ asset('images/fourdecode2.ico') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])

    <style>
       body {
    background-image: url('https://upload.wikimedia.org/wikipedia/commons/d/dd/Vista_a%C3%A9rea_de_Biblioteca_Nacional_de_El_Salvador.jpg'); /* Imagen de fondo */
    background-size: cover; /* Ajusta la imagen para cubrir el área */
    background-position: center; /* Centra la imagen */
    background-repeat: no-repeat; /* Evita que la imagen se repita */
    height: 100%; /* Altura del cuerpo igual a la altura de la ventana del navegador */
    color: #ffffff; /* Color del texto */
}

        .navbar {
            background-color: rgba(0, 0, 0, 0.8); /* Fondo negro con transparencia */
            backdrop-filter: blur(10px); /* Efecto de desenfoque de fondo */
        }

        .nav-link {
            color: #ffffff; /* Color del texto */
            transition: color 0.3s ease; /* Transición suave para cambios de color */
        }

        .nav-link:hover {
            color: #00bfff; /* Color del texto al pasar el ratón */
            transform: scale(1.05); /* Efecto de escala al pasar el ratón */
        }

        .dropdown-menu {
            background-color: #0b1d3e; /* Color negro azul que recuerda al cielo de noche */

        }

        .dropdown-item {
            color: #ffffff; /* Color de los elementos del menú desplegable */
        }

        .dropdown-item:hover {
            background-color: #00bfff; /* Color de fondo al pasar el ratón en el menú desplegable */
        }
    </style>
</head>

<body>
    <div class="container">
    </div>
    <div id="app" class="container">
        <tr>
            <br>
            <br><br>
              <!-- dejar espacio aqui para separar el menu -->
              <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" style="height: 100px">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Biblioteca') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link active" href="/home">
                            <i class="fa fa-home" aria-hidden="true"> Inicio</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('editoriales.index') }}">
                            <i class="fa fa-table" aria-hidden="true"> Editoriales</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('autores.index') }}">
                            <i class="fa fa-shopping-cart" aria-hidden="true"> Autores</i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="fa fa-server" aria-hidden="true"> Más</i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('libros.index') }}">
                                <i class="fa fa-street-view" aria-hidden="true"> Libros</i></a></li>
                            <li><a class="dropdown-item" href="{{ route('usuarios.index') }}">
                                <i class="fa fa-truck" aria-hidden="true"> Usuarios</i></a></li>
                            <li><a class="dropdown-item" href="{{ route('prestamos.index') }}">
                                <i class="fa fa-building" aria-hidden="true"> Préstamos</i></a></li>
                            <li><a class="dropdown-item" href="{{ route('devoluciones.index') }}">
                                <i class="fa fa-building" aria-hidden="true"> Devoluciones</i></a></li>
                            <li><a class="dropdown-item" href="{{ route('recordatorios.index') }}">
                                <i class="fa fa-building" aria-hidden="true"> Recordatorios</i></a></li>
                            <li><a class="dropdown-item" href="{{ route('detalleprestamos.index') }}">
                                <i class="fa fa-building" aria-hidden="true"> Detalle Préstamos</i></a></li>
                        </ul>
                    </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link active" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-ZVP8p54RlN0GZ8t+KIFNQH0Hl6X9lRU/ZGv2Qn7kJpLN0xPpMQJXYnTDJx5FlK8q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-QQxYXwMPpBOU4P2c8c/p6iF4lK6i1D/E+9YeqXtqZ3KXSmy6yP4yWnAx9hTRACQz"
        crossorigin="anonymous"></script>

        @yield('scripts')
</body>

</html>
