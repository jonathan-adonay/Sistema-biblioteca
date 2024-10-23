<?php

namespace App\Http\Controllers;

use App\Models\Reporte; // Asegúrate de que la ruta sea correcta
use App\Models\Usuario;
use Illuminate\Http\Request;

class ReportesController extends Controller
{
    // Mostrar todos los reportes
    public function index()
    {
        $reportes = Reporte::with('usuario')->get();
        return view('reportes.index', compact('reportes'));
    }

    // Mostrar el formulario para crear un nuevo reporte
    public function create()
    {
        $usuarios = Usuario::all();
        return view('reportes.create', compact('usuarios'));
    }

    // Almacenar un nuevo reporte
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'fecha_reporte' => 'required|date',
            'usuario_id' => 'required|exists:usuarios,id',
        ]);

        Reporte::create($request->all());

        return redirect()->route('reportes.index')->with('success', 'Reporte creado correctamente.');
    }

    // Mostrar un reporte específico
    public function show($id)
    {
        $reporte = Reporte::with('usuario')->findOrFail($id);
        return view('reportes.show', compact('reporte'));
    }

    // Mostrar el formulario para editar un reporte
    public function edit($id)
    {
        $reporte = Reporte::findOrFail($id);
        $usuarios = Usuario::all();
        return view('reportes.edit', compact('reporte', 'usuarios'));
    }

    // Actualizar un reporte
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'fecha_reporte' => 'required|date',
            'usuario_id' => 'required|exists:usuarios,id',
        ]);

        $reporte = Reporte::findOrFail($id);
        $reporte->update($request->all());

        return redirect()->route('reportes.index')->with('success', 'Reporte actualizado correctamente.');
    }

    // Eliminar un reporte
    public function destroy($id)
    {
        $reporte = Reporte::findOrFail($id);
        $reporte->delete();

        return redirect()->route('reportes.index')->with('success', 'Reporte eliminado correctamente.');
    }
}
