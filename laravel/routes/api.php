<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\ProductosController;
use App\Http\Controllers\v1\ClientesController;
use App\Http\Controllers\v1\ServiciosController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Para el llamado de Productos

Route::get("/v1/productos",[ProductosController::class,"getAll"]);
Route::get("/v1/productos/{id}",[ProductosController::class,"getItem"]);
Route::post("/v1/productos",[ProductosController::class,"store"]);
Route::put("/v1/productos",[ProductosController::class,"update"]);
Route::patch("/v1/productos",[ProductosController::class,"patch"]);
Route::delete("v1/productos",[ProductosController::class,"delete"]);

//Para el llamado de Clientes

Route::get("/v1/clientes",[ClientesController::class,"getAll"]);
Route::get("/v1/clientes/{id}",[ClientesController::class,"getItem"]);
Route::post("/v1/clientes",[ClientesController::class,"store"]);
Route::put("/v1/clientes",[ClientesController::class,"update"]);
Route::patch("/v1/clientes",[ClientesController::class,"patch"]);
Route::delete("v1/clientes/{id}",[ClientesController::class,"delete"]);

//Para el llamado de servicios

Route::get("/v1/servicios",[ServiciosController::class,"getAll"]);
Route::get("/v1/servicios/{id}",[ServiciosController::class,"getItem"]);
Route::post("/v1/servicios",[ServiciosController::class,"store"]);
Route::put("/v1/servicios",[ServiciosController::class,"update"]);
Route::patch("/v1/servicios",[ServiciosController::class,"patch"]);
Route::delete("v1/servicios/{id}",[ServiciosController::class,"delete"]);
