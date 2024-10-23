<?php

namespace App\Http\Controllers;

use App\Models\Autor; // Asegúrate de que el modelo Autor esté en la ubicación correcta
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    public function index()
    {
        // Lógica para mostrar todos los autores
        $autores = Autor::all();
        return view('autores.index', compact('autores'));
    }

    public function create()
    {
        // Lógica para mostrar el formulario de creación
        return view('autores.create');
    }

    public function store(Request $request)
    {
        // Lógica para almacenar un nuevo autor
        $request->validate([
           
            'nombre' => 'required',
            'apellido' => 'required',
            'biografia' => 'required',
            'fecha_nacimiento' => 'required',
            'nacionalidad' => 'required',
            'telefono' => 'required',
            'website' => 'required',
            'foto' => 'required',
            'genero' => 'required',
        ]);
        
        Autor::create($request->all());
        return redirect()->route('autores.index');
    }

    public function show($id)
    {
        // Lógica para mostrar un autor específico
        $autor = Autor::findOrFail($id);
        return view('autores.show', compact('autor'));
    }

    public function edit($id)
    {
        // Lógica para mostrar el formulario de edición
        $autor = Autor::findOrFail($id);
        return view('autores.edit', compact('autor'));
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar un autor
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'apellido' => 'required',
            'biografia' => 'required',
            'fecha_nacimiento' => 'required',
            'nacionalidad' => 'required',
            'telefono' => 'required',
            'website' => 'required',
            'foto' => 'required',
            'genero' => 'required',
        ]);

        $autor = Autor::findOrFail($id);
        $autor->update($request->all());
        return redirect()->route('autores.index');
    }

    public function destroy($id)
    {
        // Lógica para eliminar un autor
        Autor::destroy($id);
        return redirect()->route('autores.index');
    }
   
    public function __construct()
{
$this->middleware('auth');
}
}
