<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Models\Libro;
use App\Models\Usuario;
use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    // Mostrar listado de préstamos
    public function index()
    {
        $prestamos = Prestamo::with(['libro', 'usuario'])->get(); // Obtiene todos los préstamos con relación a libros y usuarios
        return view('prestamos.index', compact('prestamos'));
    }

    // Mostrar formulario para crear un nuevo préstamo
    public function create()
    {
        $libros = Libro::all(); // Obtiene todos los libros
        $usuarios = Usuario::all(); // Obtiene todos los usuarios
        return view('prestamos.create', compact('libros', 'usuarios'));
    }

    // Guardar un nuevo préstamo
    public function store(Request $request)
    {
        $request->validate([
            'libro_id' => 'required|exists:libros,id',
            'usuario_id' => 'required|exists:usuarios,id',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion' => 'required|date|after:fecha_prestamo',
            'estado' => 'required|string',
        ]);

        Prestamo::create($request->all());
        return redirect()->route('prestamos.index')->with('success', 'Préstamo creado exitosamente.');
    }

    // Mostrar detalles de un préstamo específico
    public function show(Prestamo $prestamo)
    {
        return view('prestamos.show', compact('prestamo'));
    }

    // Mostrar formulario para editar un préstamo
    public function edit(Prestamo $prestamo)
    {
        $libros = Libro::all(); // Obtiene todos los libros
        $usuarios = Usuario::all(); // Obtiene todos los usuarios
        return view('prestamos.edit', compact('prestamo', 'libros', 'usuarios'));
    }

    // Actualizar un préstamo
    public function update(Request $request, Prestamo $prestamo)
    {
        $request->validate([
            'libro_id' => 'required|exists:libros,id',
            'usuario_id' => 'required|exists:usuarios,id',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion' => 'required|date|after:fecha_prestamo',
            'estado' => 'required|string',
        ]);

        $prestamo->update($request->all());
        return redirect()->route('prestamos.index')->with('success', 'Préstamo actualizado exitosamente.');
    }

    // Eliminar un préstamo
    public function destroy(Prestamo $prestamo)
    {
        $prestamo->delete();
        return redirect()->route('prestamos.index')->with('success', 'Préstamo eliminado exitosamente.');
    }
    public function __construct()
{
$this->middleware('auth');
}
}
