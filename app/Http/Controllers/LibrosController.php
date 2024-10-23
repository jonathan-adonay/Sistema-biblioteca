<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Autor;  // Importa el modelo Autor
use App\Models\Editorial;  // Importa el modelo Editorial
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        $autores = Autor::all();  // Obtener todos los autores
        $editoriales = Editorial::all();  // Obtener todas las editoriales

        return view('libros.create', compact('autores', 'editoriales'));  // Pasar las variables a la vista
    }

    public function store(Request $request)
    {
        // Validar y crear un nuevo libro
        $data = $request->validate([
            'titulo' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
        'genero' => 'nullable|string|max:255|regex:/^[a-zA-Z\s]+$/',
        'autor_id' => 'required|exists:autores,id',
        'anio_publicacion' => 'nullable|integer|between:1900,' . date('Y'),
        'editorial_id' => 'required|exists:editoriales,id',
        'descripcion' => 'nullable|string|max:1000',
            // Otros campos...

        ], [
                // Mensajes personalizados de error
                'titulo.required' => 'El campo título es obligatorio.',
                'titulo.max' => 'El campo título no puede exceder los 255 caracteres.',
                'genero.max' => 'El campo género no puede exceder los 255 caracteres.',
                'autor_id.required' => 'Debe seleccionar un autor.',
                'autor_id.exists' => 'El autor seleccionado no es válido.',
                'anio_publicacion.between' => 'El año de publicación debe ser entre 1900 y el año actual.',
                'editorial_id.required' => 'Debe seleccionar una editorial.',
                'editorial_id.exists' => 'La editorial seleccionada no es válida.',
                'descripcion.max' => 'La descripción no puede exceder los 1000 caracteres.',
            ]);

        Libro::create($data);
        return redirect()->route('libros.index')->with('success', 'Libro creado exitosamente.');
    }

    public function show($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.show', compact('libro'));
    }

    public function edit($id)
    {
        $libro = Libro::findOrFail($id); // Obtener el libro por ID
        $autores = Autor::all(); // Obtener todos los autores
        $editoriales = Editorial::all(); // Obtener todas las editoriales
        return view('libros.edit', compact('libro', 'autores', 'editoriales')); // Pasar todos a la vista
    }
    


    public function update(Request $request, $id)
    {
        // Validar y actualizar un libro
        $data = $request->validate([
            'titulo' => 'required',
            'autor_id' => 'required|exists:autores,id',
            'editorial_id' => 'required|exists:editoriales,id',
            'genero' => 'nullable|string',
            'descripcion' => 'nullable|string',
            'anio_publicacion' => 'nullable|integer',
            // Otros campos...
        ]);

        $libro = Libro::findOrFail($id);
        $libro->update($data);
        return redirect()->route('libros.index')->with('success', 'Libro actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $libro = Libro::find($id);
        if ($libro) {
            $libro->delete();
            return response()->json(['res' => true]);
        }
        return response()->json(['res' => false], 404);
    }
    
    
    public function __construct()
{
$this->middleware('auth');
}
    
}
