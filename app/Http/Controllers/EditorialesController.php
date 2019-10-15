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
}
