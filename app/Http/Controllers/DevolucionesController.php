<?php

namespace App\Http\Controllers;

use App\Models\Devolucion; // Asegúrate de que la ruta sea correcta
use App\Models\Prestamo;
use Illuminate\Http\Request;

class DevolucionesController extends Controller
{
    // Mostrar todas las devoluciones
    public function index()
    {
        $devoluciones = Devolucion::with('prestamo')->get();
        return view('devoluciones.index', compact('devoluciones'));
    }

    // Mostrar el formulario para crear una nueva devolución
    public function create()
    {
        $prestamos = Prestamo::all();
        return view('devoluciones.create', compact('prestamos'));
    }

    // Almacenar una nueva devolución
    public function store(Request $request)
    {
        $request->validate([
            'prestamo_id' => 'required|exists:prestamos,id',
            'fecha_devolucion' => 'required|date',
            'estado' => 'required|in:completa,pendiente',
        ]);

        Devolucion::create($request->only(['prestamo_id', 'fecha_devolucion', 'estado']));

        return redirect()->route('devoluciones.index')->with('success', 'Devolución creada correctamente.');
    }

    // Mostrar una devolución específica
    public function show($id)
    {
        $devolucion = Devolucion::with('prestamo')->findOrFail($id);
        return view('devoluciones.show', compact('devolucion'));
    }

    // Mostrar el formulario para editar una devolución
    public function edit($id)
    {
        $devolucion = Devolucion::findOrFail($id);
        $prestamos = Prestamo::all();
        return view('devoluciones.edit', compact('devolucion', 'prestamos'));
    }

    // Actualizar una devolución
    public function update(Request $request, $id)
    {
        $request->validate([
            'prestamo_id' => 'required|exists:prestamos,id',
            'fecha_devolucion' => 'required|date',
            'estado' => 'required|in:completa,pendiente',
        ]);

        $devolucion = Devolucion::findOrFail($id);
        $devolucion->update($request->only(['prestamo_id', 'fecha_devolucion', 'estado']));

        return redirect()->route('devoluciones.index')->with('success', 'Devolución actualizada correctamente.');
    }

    // Eliminar una devolución
    public function destroy($id)
    {
        $devolucion = Devolucion::findOrFail($id);
        $devolucion->delete();

        return redirect()->route('devoluciones.index')->with('success', 'Devolución eliminada correctamente.');
    }

    public function __construct()
{
$this->middleware('auth');
}
}
