<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    {{-- Nuestro menú --}}
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Inventario</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">
                            <i class="fas fa-home"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> Autores
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/autor/create">Agregar autor</a></li>
                            <li><a class="dropdown-item" href="/autor/update">Actualizar autor</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/autor/show">Mostrar</a></li>
                        </ul>
                        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="editorialesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-book"></i> Editoriales <!-- Puedes cambiar el icono aquí -->
    </a>
    <ul class="dropdown-menu" aria-labelledby="editorialesDropdown">
        <li><a class="dropdown-item" href="/editoriales/create">Agregar editorial</a></li>
        <li><a class="dropdown-item" href="/editoriales/update">Actualizar editorial</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="/editorial/show">Mostrar</a></li>
    </ul>
</li>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-book"></i> Libros
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/libros/create">Agregar libro</a></li>
                            <li><a class="dropdown-item" href="/libros/update">Actualizar libro</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/libros/show">Mostrar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-users"></i> Usuarios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/usuarios/create">Agregar usuario</a></li>
                            <li><a class="dropdown-item" href="/usuarios/update">Actualizar usuario</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/usuarios/show">Mostrar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-book-reader"></i> Préstamos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/prestamos/create">Agregar préstamo</a></li>
                            <li><a class="dropdown-item" href="/prestamos/update">Actualizar préstamo</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/prestamos/show">Mostrar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-clipboard-list"></i> Detalle de Préstamos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/detalle_prestamo/create">Agregar detalle</a></li>
                            <li><a class="dropdown-item" href="/detalle_prestamo/update">Actualizar detalle</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/detalle_prestamo/show">Mostrar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-undo"></i> Devoluciones
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/devoluciones/create">Agregar devolución</a></li>
                            <li><a class="dropdown-item" href="/devoluciones/update">Actualizar devolución</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/devoluciones/show">Mostrar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell"></i> Recordatorio
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/recordatorios/create">Agregar recordatorio</a></li>
                            <li><a class="dropdown-item" href="/recordatorios/show">Mostrar recordatorios</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-chart-line"></i> Reportes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/reportes/create">Generar reporte</a></li>
                            <li><a class="dropdown-item" href="/reportes/show">Ver reportes</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        {{-- Aquí irá el contenido de todas las páginas --}}
        @yield('content') 
    </div> 
</body>
</html>
