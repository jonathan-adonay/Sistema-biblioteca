<?php

namespace App\Http\Controllers;

use App\Models\Recordatorio; // Asegúrate de que la ruta sea correcta
use App\Models\Usuario;
use App\Models\Libro;
use Illuminate\Http\Request;

class RecordatoriosController extends Controller
{
    // Mostrar todos los recordatorios
    public function index()
    {
        $recordatorios = Recordatorio::with(['usuario', 'libro'])->get();
        return view('recordatorios.index', compact('recordatorios'));
    }

    // Mostrar el formulario para crear un nuevo recordatorio
    public function create()
    {
        $usuarios = Usuario::all();
        $libros = Libro::all();
        return view('recordatorios.create', compact('usuarios', 'libros'));
    }

    // Almacenar un nuevo recordatorio
    public function store(Request $request)
    {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'libro_id' => 'nullable|exists:libros,id',
            'mensaje' => 'required|string|max:255',
            'fecha_recordatorio' => 'required|date',
        ]);

        Recordatorio::create($request->all());

        return redirect()->route('recordatorios.index')->with('success', 'Recordatorio creado correctamente.');
    }

    // Mostrar un recordatorio específico
    public function show($id)
    {
        $recordatorio = Recordatorio::with(['usuario', 'libro'])->findOrFail($id);
        return view('recordatorios.show', compact('recordatorio'));
    }


    // Mostrar el formulario para editar un recordatorio
    public function edit($id)
    {
        $recordatorio = Recordatorio::findOrFail($id);
        $usuarios = Usuario::all();
        $libros = Libro::all();
        return view('recordatorios.edit', compact('recordatorio', 'usuarios', 'libros'));
    }

    // Actualizar un recordatorio
    public function update(Request $request, $id)
    {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'libro_id' => 'nullable|exists:libros,id',
            'mensaje' => 'required|string|max:255',
            'fecha_recordatorio' => 'required|date',
        ]);

        $recordatorio = Recordatorio::findOrFail($id);
        $recordatorio->update($request->all());

        return redirect()->route('recordatorios.index')->with('success', 'Recordatorio actualizado correctamente.');
    }

    // Eliminar un recordatorio
    public function destroy($id)
    {
        $recordatorio = Recordatorio::findOrFail($id);
        $recordatorio->delete();

        return redirect()->route('recordatorios.index')->with('success', 'Recordatorio eliminado correctamente.');
    }
    public function __construct()
{
$this->middleware('auth');
}
}
