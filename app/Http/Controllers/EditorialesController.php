<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialesController extends Controller
{
    public function index()
    {
        $editoriales = Editorial::all();
        return view('editoriales.index', compact('editoriales'));
    }

    public function create()
    {
        return view('editoriales.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'direccion' => 'nullable|string',
            'telefono' => 'nullable|string',
            'email' => 'nullable|email|unique:editoriales,email',
            'pagina_web' => 'nullable|string',
            'descripcion' => 'nullable|string',
            'logo' => 'nullable|string',
            'anio_fundacion' => 'nullable|integer',
        ], [
            'nombre.required' => 'El nombre de la editorial es obligatorio.',
            'email.unique' => 'El correo electrónico ya está en uso.',
        ]);

        Editorial::create($data);

        return redirect()->route('editoriales.index')->with('success', 'Editorial creada exitosamente.');
    }

    public function show($id)
    {
        $editorial = Editorial::findOrFail($id);
        return view('editoriales.show', compact('editorial'));
    }

    public function edit($id)
    {
        $editorial = Editorial::findOrFail($id);
        return view('editoriales.edit', compact('editorial'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'direccion' => 'nullable|string',
            'telefono' => 'nullable|string',
            'email' => 'nullable|email|unique:editoriales,email,' . $id,
            'pagina_web' => 'nullable|string',
            'descripcion' => 'nullable|string',
            'logo' => 'nullable|string',
            'anio_fundacion' => 'nullable|integer',
        ]);

        $editorial = Editorial::findOrFail($id);
        $editorial->update($data);

        return redirect()->route('editoriales.index')->with('success', 'Editorial actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $editorial = Editorial::findOrFail($id);
        
        if ($editorial) {
            $editorial->delete();
            return redirect()->route('editoriales.index')->with('success', 'Editorial eliminada exitosamente.');
        }

        return redirect()->route('editoriales.index')->with('error', 'No se pudo eliminar la editorial.');
    }

    public function __construct()
{
$this->middleware('auth');
}
}
