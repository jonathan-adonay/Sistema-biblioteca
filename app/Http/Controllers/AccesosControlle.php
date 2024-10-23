<?php

namespace App\Http\Controllers;

use App\Models\AccesoLogin;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class AccesoLoginController extends Controller
{
    /**
     * Display a listing of the access logs.
     */
    public function index()
    {
        // Obtener todos los accesos de login
        $accesos = AccesoLogin::with('usuario')->get();

        // Mostrar la vista index junto al listado de accesos
        return view('acceso_login.index', compact('accesos'));
    }

    /**
     * Store a newly created access log in storage.
     */
    public function store(Request $request)
    {
        // Validar los campos
        $data = $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'ip_address' => 'required|string|max:45',
        ]);

        // Crear un nuevo registro de acceso
        AccesoLogin::create([
            'usuario_id' => $data['usuario_id'],
            'ip_address' => $data['ip_address'],
            'fecha_login' => now(), // Se registra la fecha y hora actual
        ]);

        // Redireccionar a la lista de accesos
        return redirect()->route('acceso_login.index')->with('success', 'Acceso registrado exitosamente.');
    }

    /**
     * Display the specified access log.
     * @param int $id
     */
    public function show($id)
    {
        // Encontrar el acceso por su ID
        $acceso = AccesoLogin::with('usuario')->findOrFail($id);

        // Mostrar la vista show junto al acceso
        return view('acceso_login.show', compact('acceso'));
    }

    /**
     * Remove the specified access log from storage.
     * @param int $id
     */
    public function destroy($id)
    {
        // Encontrar el acceso por su ID y eliminarlo
        $acceso = AccesoLogin::findOrFail($id);
        $acceso->delete();

        // Retornar una respuesta JSON
        return response()->json(['res' => true]);
    }
    
}
