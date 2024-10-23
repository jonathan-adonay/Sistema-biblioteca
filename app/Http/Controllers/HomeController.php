<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');  // Aplica middleware si es necesario
    }

    public function index()
    {
        // Lógica para la página de inicio
        return view('home');  // Asegúrate de que esta vista exista
    }
}
