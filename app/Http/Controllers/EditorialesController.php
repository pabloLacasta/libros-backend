<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editorial;

class EditorialesController extends Controller
{
    public function store(Request $request, Editorial $editorial){
        $validatedData = $request->validate([
            'nombre' => 'unique:editoriales,nombre'
        ]);

        $editorial = new Editorial;
        $editorial->nombre = $request->nombre;
        $editorial->save();

        return $editorial;

    }

    public function destroy(Editorial $editorial, $editorial_id){
        $editorial = Editorial::find($editorial_id);
        $editorial_id = $editorial->id;
        $editorial->destroy($editorial_id);

        return $editorial;
    }

    public function update(Request $request, Editorial $editorial){
        $validatedData = $request->validate([
            'id' => 'exists:editoriales,id',
            'nombre' => 'unique:editoriales,nombre'
        ]);
        
        $editorial = Editorial::find($editorial_id);
        $editorial_id = $editorial->id;

        $editorial->nombre = $request->nombre;
        $editorial->save();

        return $editorial;
    }

    public function index(Editorial $editoriales){

        $editoriales = Editorial::all();

        return $editoriales;
    }

    public function show(Editorial $editorial, $editorial_id){
        
        $editorial = Editorial::find($editorial_id);
        $editorial_id = $editorial->id;

        return $editorial;
    }
    
}
