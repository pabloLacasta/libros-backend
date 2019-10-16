<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Libro;
use App\Editorial;

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

    public function destroy(Libro $libro, $libro_id){
        $libro = Libro::find($libro_id);
        $libro_id = $libro->id;
        Libro::destroy($libro_id);
        return $libro;
    }

    public function update (Request $request, Libro $libro, $libro_id, Editorial $editorial){

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
                            ],
            'editorial' => ['required', Rule::in([$editorial->id])]
        ]);

        $libro = Libro::find($libro_id);
        $libro_id = $libro->id;

        $libro->nombre = $request->nombre;
        $libro->precio = $request->precio;
        $libro->categoria = $request->categoria;

        $libro->save();

        return $libro->id;
    }

    public function index(Libro $libro){
        $libros = Libro::all();

        return $libros;
    }

    public function show(Libro $libro, $libro_id){
        $libro = Libro::find($libro_id);
        $libro_id = $libro->id;

        return $libro;
    }
}
