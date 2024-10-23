<?php

namespace App\Http\Controllers;

use App\Models\Usuario; 
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    // Muestra una lista de usuarios
    public function index()
    {
        $usuarios = Usuario::all(); // Obtiene todos los usuarios
        return view('usuarios.index', compact('usuarios')); // Retorna la vista con los usuarios
    }

    // Muestra el formulario para crear un nuevo usuario
    public function create()
    {
        return view('usuarios.create'); // Retorna la vista del formulario de creación
    }

    // Almacena un nuevo usuario en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ], [
            // Mensajes de error personalizados
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.regex' => 'El campo nombre solo puede contener letras y espacios.',
            'nombre.max' => 'El nombre no puede exceder los 255 caracteres.',
            'email.required' => 'El campo email es obligatorio.',
            'email.email' => 'El email debe ser una dirección de correo válida.',
            'email.unique' => 'El email ya está registrado.',
            'password.required' => 'El campo contraseña es obligatorio.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
        ]);
    
        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente.');
    }
    
    

    // Muestra un usuario específico
    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario')); // Retorna la vista del usuario
    }

    // Muestra el formulario para editar un usuario
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario')); // Retorna la vista de edición
    }

    // Actualiza un usuario específico en la base de datos
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios,email,' . $usuario->id,
            'password' => 'nullable|string|min:8|confirmed', // Confirmación de contraseña
        ]);

        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;

        // Actualiza la contraseña solo si se proporciona
        if ($request->password) {
            $usuario->password = bcrypt($request->password); // Encripta la nueva contraseña
        }

        $usuario->save(); // Guarda los cambios

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    // Elimina un usuario específico
    public function destroy(Usuario $usuario)
    {
        $usuario->delete(); // Elimina el usuario
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente.');
    }
    public function __construct()
{
$this->middleware('auth');
}
}
