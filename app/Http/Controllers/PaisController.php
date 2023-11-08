<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{
    //

    public function crearPais(Request $request){
        $pais = new Pais();
        $pais->nombre_pais = $REQUEST ->nombre;
        $pais->save();

        return response()->json([
            "success" =>true,
            "message"=> "" ,
            "data"=> "se creo el registro con id: " .$Pais->id,
            "cantidad" => 1
        ]);
    }

    public function obtener(){
        $Pais = new Pais();

        $datos = $Pais::All();

        return response()->json([
                "success"=> true,
                "message" => "",
                "data" => $datos,
                "cantidad" => 1
        ]);
    }
}
