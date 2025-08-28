<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    // funcion para mostrar todos los libros:)
    public function index()
    {
        $libros = Libro::all();
        return view('libros', compact('libros'));
    }
}