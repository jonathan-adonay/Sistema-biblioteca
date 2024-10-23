<?php

namespace App\Http\Controllers;

use App\Models\Detalle_prestamo; // Asegúrate de que la ruta sea correcta
use App\Models\Prestamo;
use App\Models\Libro;
use Illuminate\Http\Request;

class DetallePrestamoController extends Controller
{
    // Mostrar todos los detalles de préstamos
    public function index()
    {
        $detallePrestamos = Detalle_prestamo::with(['prestamo', 'libro'])->get();
        return view('detalleprestamos.index', compact('detallePrestamos'));
    }

    // Mostrar el formulario para crear un nuevo detalle de préstamo
    public function create()
    {
        $prestamos = Prestamo::all();
        $libros = Libro::all();
        return view('detalleprestamos.create', compact('prestamos', 'libros'));
    }

    // Almacenar un nuevo detalle de préstamo
    public function store(Request $request)
    {
        $request->validate([
            'prestamo_id' => 'required|exists:prestamos,id',
            'libro_id' => 'required|exists:libros,id',
            'cantidad' => 'required|integer|min:1',
            'estado_libro' => 'required|in:En buen estado,Dañado,Perdido',
        ]);

        Detalle_prestamo::create($request->only(['prestamo_id', 'libro_id', 'cantidad', 'estado_libro']));

        return redirect()->route('detalleprestamos.index')->with('success', 'Detalle de préstamo creado correctamente.');
    }

    // Mostrar un detalle de préstamo específico
    public function show($id)
    {
        $detallePrestamo = Detalle_prestamo::with(['prestamo', 'libro'])->findOrFail($id);
        return view('detalleprestamos.show', compact('detallePrestamo'));
    }

    // Mostrar el formulario para editar un detalle de préstamo
    public function edit($id)
    {
        $detallePrestamo = Detalle_prestamo::findOrFail($id);
        $prestamos = Prestamo::all();
        $libros = Libro::all();
        return view('detalleprestamos.edit', compact('detallePrestamo', 'prestamos', 'libros'));
    }

    // Actualizar un detalle de préstamo
    public function update(Request $request, $id)
    {
        $request->validate([
            'prestamo_id' => 'required|exists:prestamos,id',
            'libro_id' => 'required|exists:libros,id',
            'cantidad' => 'required|integer|min:1',
            'estado_libro' => 'required|in:En buen estado,Dañado,Perdido',
        ]);

        $detallePrestamo = Detalle_prestamo::findOrFail($id);
        $detallePrestamo->update($request->only(['prestamo_id', 'libro_id', 'cantidad', 'estado_libro']));

        return redirect()->route('detalleprestamos.index')->with('success', 'Detalle de préstamo actualizado correctamente.');
    }

    // Eliminar un detalle de préstamo
    public function destroy($id)
    {
        $detallePrestamo = Detalle_prestamo::findOrFail($id);
        $detallePrestamo->delete();

        return redirect()->route('detalleprestamos.index')->with('success', 'Detalle de préstamo eliminado correctamente.');
    }

    public function __construct()
{
$this->middleware('auth');
}
}
