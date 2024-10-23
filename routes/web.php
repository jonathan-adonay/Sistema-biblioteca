<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\EditorialesController;
use App\Http\Controllers\AutoresController;
use App\Http\Controllers\PrestamosController;
use App\Http\Controllers\DetallePrestamoController;
use App\Http\Controllers\DevolucionesController;
use App\Http\Controllers\RecordatoriosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;

// Rutas de recursos para detalles de préstamos
Route::resource('detalleprestamos', DetallePrestamoController::class);

// Rutas para Home
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home', function () { return view('home'); })->middleware('auth');

// Rutas de recursos para autores
Route::resource('autores', AutoresController::class);
Route::get('/autores/show', [AutoresController::class, 'index']);
Route::get('/autores/create',  [AutoresController::class, 'create']);
Route::get('/autores/edit/{autor}', [AutoresController::class, 'edit']);
Route::post('/autores/store', [AutoresController::class, 'store']);
Route::put('/autores/update/{autor}', [AutoresController::class, 'update']);
Route::delete('/autores/destroy/{id}', [AutoresController::class, 'destroy']);


// Rutas de recursos para préstamos
Route::resource('prestamos', PrestamosController::class);
Route::post('/prestamos', [PrestamosController::class, 'store'])->name('prestamos.store');
//Prestamos 
Route::get('/prestamos/show', [PrestamosController::class, 'index']);
Route::get('/prestamos/create',  [PrestamosController::class, 'create']);
Route::get('/prestamos/edit/{product}', [PrestamosController::class, 'edit']);
Route::put('/prestamos/update/{product}', [PrestamosController::class, 'update']);
Route::delete('/prestamos/destroy/{id}', [PrestamosController::class, 'destroy']);

// Rutas de recursos para editoriales
Route::resource('editoriales', EditorialesController::class);
//editoriales
Route::get('/editoriales/show', [EditorialesController::class, 'index']);
Route::get('/editoriales/create',  [EditorialesController::class, 'create']);
Route::get('/editoriales/edit/{product}', [EditorialesController::class, 'edit']);
Route::post('/editoriales/store', [EditorialesController::class, 'store']);
Route::put('/editoriales/update/{product}', [EditorialesController::class, 'update']);
Route::delete('/editoriales/destroy/{id}', [EditorialesController::class, 'destroy']);


// Rutas de recursos para libros
Route::resource('libros', LibrosController::class);
//Ruta para libros
Route::get('/libros/show', [LibrosController::class, 'index']);
Route::get('/libros/create',  [LibrosController::class, 'create']);
Route::get('/libros/edit/{libros}', [LibrosController::class, 'edit']);
Route::post('/libros/store', [LibrosController::class, 'store']);
Route::put('/libros/update/{libros}', [LibrosController::class, 'update']);
Route::delete('/libros/destroy/{id}', [LibrosController::class, 'destroy']);


// Rutas de recursos para usuarios
Route::resource('usuarios', UsuariosController::class);
//Ruta para usuarios
Route::get('/usuarios/show', [UsuariosController::class, 'index']);
Route::get('/usuarios/index', [UsuariosController::class, 'index']);
Route::get('/usuarios/create',  [UsuariosController::class, 'create']);
Route::get('/usuarios/edit/{usuario}', [UsuariosController::class, 'edit']);
Route::post('/usuarios/store', [UsuariosController::class, 'store']);
Route::put('/usuarios/update/{usuario}', [UsuariosController::class, 'update']);
Route::delete('/usuarios/destroy/{id}', [UsuariosController::class, 'destroy']);


// Rutas para devoluciones
Route::resource('devoluciones', DevolucionesController::class);
//Devoluciones
Route::get('/devoluciones/show', [DevolucionesController::class, 'index']);
Route::get('/devoluciones/create',  [DevolucionesController::class, 'create']);
Route::get('/devoluciones/edit/{product}', [DevolucionesController::class, 'edit']);
Route::post('/devoluciones/store', [DevolucionesController::class, 'store']);
Route::put('/devoluciones/update/{product}', [DevolucionesController::class, 'update']);
Route::delete('/devoluciones/destroy/{id}', [DevolucionesController::class, 'destroy']);


// Rutas para recordatorios
Route::resource('recordatorios', RecordatoriosController::class);
//recordatorios
Route::get('/recordatorios/show', [RecordatoriosController::class, 'index']);
Route::get('/recordatorios/create',  [RecordatoriosController::class, 'create']);
Route::get('/recordatorios/edit/{product}', [RecordatoriosController::class, 'edit']);
Route::post('/recordatorios/store', [RecordatoriosController::class, 'store']);
Route::put('/recordatorios/update/{product}', [RecordatoriosController::class, 'update']);
Route::delete('/recordatorios/destroy/{id}', [RecordatoriosController::class, 'destroy']);


// Rutas para reportes
Route::get('/reportes/show', function () {
    return view('reportes/show');
});

Route::get('/reportes/create', function () {
    return view('reportes/create');
});

Route::get('/reportes/update', function () {
    return view('reportes/update');
});

// Ruta para nombre
Route::get('/inicio/nombre', function () {
    return view('inicio/nombre', ['nombre' => 'Santos Enmanuel', 'apellido' => 'Chicas Garcia']);
});

// Rutas de autenticación
Auth::routes();

// Ruta principal
Route::get('/', [HomeController::class, 'index'])->name('home');
