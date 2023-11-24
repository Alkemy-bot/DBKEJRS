<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\respuestaController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/**@OA\Get(
 *      path = "/api/ejecutar",
 *      summary = "Endpoint para la consulta de datos"
 *      @OA\Response(response="200", description="Datos Devueltos"),
 * ) 
 */

Route::get("/ejecutar", [respuestaController::class, "index"]);

Route::post("/nuevo", [PaisController::class, "crearPais"]);



Route::get("/obtener", [PaisController::class, "obtener"]);

Route::post('/login',[AuthController::class,'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/registrar',[AuthController::class,'register']);
    Route::post('/salir',[AuthController::class,'logout']);

});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
