<?php

namespace App\Http\Controllers;
use App\Models\Recordatorio;
use App\Models\Usuario;
use App\Models\Libro;
use Carbon\Carbon; // Asegúrate de importar Carbon
use Illuminate\Http\Request;

class RecordatoriosController extends Controller
{
    // Mostrar la lista de recordatorios
    public function index()
    {
        $recordatorios = Recordatorio::with('usuario', 'libro')->paginate(10);
        return view('recordatorios.index', compact('recordatorios'));
    }

    // Mostrar el formulario para crear un nuevo recordatorio
    public function create()
    {
        $usuarios = Usuario::all(); // Obtener todos los usuarios
        $libros = Libro::all(); // Obtener todos los libros
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

        return redirect()->route('recordatorios.index')->with('success', 'Recordatorio creado exitosamente.');
    }

    // Mostrar el formulario para editar un recordatorio existente
    public function edit($id)
{
    $recordatorio = Recordatorio::with('usuario', 'libro')->findOrFail($id);

    // Asegúrate de que fecha_recordatorio sea un objeto Carbon
    $recordatorio->fecha_recordatorio = Carbon::parse($recordatorio->fecha_recordatorio);

    $usuarios = Usuario::all(); // Asegúrate de que estás obteniendo los usuarios
    $libros = Libro::all(); // Asegúrate de que estás obteniendo los libros

    return view('recordatorios.edit', compact('recordatorio', 'usuarios', 'libros'));
}

    // Actualizar un recordatorio existente
    public function update(Request $request, Recordatorio $recordatorio)
    {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'libro_id' => 'nullable|exists:libros,id',
            'mensaje' => 'required|string|max:255',
            'fecha_recordatorio' => 'required|date',
        ]);

        $recordatorio->update($request->all());

        return redirect()->route('recordatorios.index')->with('success', 'Recordatorio actualizado exitosamente.');
    }

    // Eliminar un recordatorio
    public function destroy(Recordatorio $recordatorio)
    {
        $recordatorio->delete();
        return redirect()->route('recordatorios.index')->with('success', 'Recordatorio eliminado exitosamente.');
    }
    public function show($id)
    {
        $recordatorio = Recordatorio::with('usuario', 'libro')->findOrFail($id);
        
        // Asegúrate de que fecha_recordatorio sea un objeto Carbon
        $recordatorio->fecha_recordatorio = \Carbon\Carbon::parse($recordatorio->fecha_recordatorio);
    
        return view('recordatorios.show', compact('recordatorio'));
    }
    public function __construct()
{
$this->middleware('auth');
}
}
