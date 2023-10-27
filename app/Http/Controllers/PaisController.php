<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{
    //

    public function crearPais(Request $request)^{
        $pais = new Pais();
        $pais->nombre_pais = $REQUEST ->nombre;
        $pais->save();

        return response()->json([
            "Success" ->true,
            "Message"-> "",
            "data"-> "se creo el registro con id: "$pais->id,
            "cantidad"-> 1
        ])
    }
}
