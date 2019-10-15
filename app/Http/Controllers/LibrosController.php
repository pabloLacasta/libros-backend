<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Libro;

class LibrosController extends Controller
{
    public function store(Request $request, Libro $libro){
        $validatedData = $request->validate([
            'nombre'=>'required|unique:libros,nombre',
            'precio' => 'required',
            'categoria' => ['required', 
                            Rule::in([
                                    'novela negra', 
                                    'autobiografía', 
                                    'histórica', 
                                    'ciencia ficción'
                            ])
            ]
        ]);

        $libro = new Libro;
        $libro->nombre = $request->nombre;
        $libro->precio = $request->precio;
        $libro->categoria = $request->categoria;

        $libro->save();

        return $libro;
    }

    public function destroy(Request $request, Libro $libro, $libro_id){
        $libro = Libro::find($libro_id);
        $libro_id = $libro->id;
        Libro::destroy($libro_id);
        return $libro;
    }
}
