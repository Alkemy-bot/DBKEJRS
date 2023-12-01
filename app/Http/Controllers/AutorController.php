<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function obtenerAutores(){
        $Autor = new Autor();
        $resultado = $Autor::all();
        return response([
            "success"=>true,
            "message"=>"Datos enncontrados",
            "data"=> $resultado,
            "errors"=> "",
            "rows"=> sizeof($resultado)
        ]);

    }
}
