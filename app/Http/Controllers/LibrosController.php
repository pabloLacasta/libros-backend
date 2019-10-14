<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class librosController extends Controller
{
    public function store(Request $request, Libros $libro){
        $libro = new Libro;
        $libro->nombre = $request->nombre;
        $libro->precio = $request->precio;
        $libro->categoria = $request->categoria;

        $libro->save();

        return $libro;
    }
}
