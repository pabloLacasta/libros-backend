<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;

class LibrosController extends Controller
{
    public function store(Request $request, Libro $libro){
        $libro = new Libro;
        $libro->nombre = $request->nombre;
        $libro->precio = $request->precio;
        $libro->categoria = $request->categoria;

        $libro->save();

        return $libro;
    }
}
