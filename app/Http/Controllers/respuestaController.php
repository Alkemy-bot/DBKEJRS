<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class respuestaController extends Controller
{
    //
    /**
 * 
 * Descripción de ejemplo para clase de Desarrollo de Backend y APIs de la carrera de Ingenieria en Diseño y Desarrollo de Videojuegos hecho por todos los estudiantes 19/10/23.
 * @return \Illuminate\Http\Response
 *
 * @OA\Get(
 *     path="/api/ejecutar",
 *     tags={"ejecutar"},
 *     summary="Este es un endpoint/método para obtener datos y mostrarlos al usuario",
 *     @OA\Response(
 *         response=200,
 *         description="Se devuelven todos los registros cuando la consulta sea satisfactoria"
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="No se pudo realizar la ejecución."
 *     )
 * ) 
 */
    public function index() {
        return response() -> json([
            "success" => true,
            "data" => "Hola, Soy José",
            "message" => "registro encontrado",
            "quantity" => 1
        ]);
    }
}
