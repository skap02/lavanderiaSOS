<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\Producto;

class ProductosController extends Controller
{
    function getAll()
    {
        $response = new \stdClass();
        $response->success=true;

        $productos = Producto::all();

        $response->data=$productos;
        return response()->json($response,200);
    }

    function getItem($id)
    {
        $response = new \stdClass();
        $response->success=true;

        $productos = Producto::find($id);
        $response->data = $productos;

        return response()->json($response,200);
    }

    function store(Request $request)
    {
        $response = new \stdClass();
        $response->success=true;

        $producto = new Producto();
        $producto->fecha = $request->fecha;
        $producto->dni = $request->dni;
        $producto->nombre = $request->nombre;
        $producto->celular = $request->celular;
        $producto->correo = $request->correo;
        $producto->dirección = $request->dirección;
        $producto->save();

        $response->data=$producto;

        return response()->json($response,201);
    }

    function update(Request $response)
    {
        $response = new \stdClass();
        $response->success = true;

        $producto = Producto::find($request->id);

        $producto->fecha = $request->fecha;
        $producto->dni = $request->dni;
        $producto->nombre = $request->nombre;
        $producto->celular = $request->celular;
        $producto->correo = $request->correo;
        $producto->dirección = $request->dirección;
        $producto->save();

        $response->data = $producto;

        return response()->json($producto,200);
    }

    function patch(Request $request)
    {
        $response = new \stdClass();
        $response->success = true;

        $producto = Producto::find($request->id);

        if(isset($request->codigo))
        $producto->codigo = $request->codigo;

        if (isset($request->nombre)) 
        $producto->nombre = $request->nombre;
        
        $producto->save();

        $response->data = $producto;

        return response()->json($producto,200);
    }

    function delete($id)
    {
        $response = new \stdClass();
        $response->success = true;

        $response_code;

        $producto = Producto::find($id);

        if($producto)
        {
            $producto->delete();
            $response_code = 200;
        }
        else
        {
            $response->erros = [];
            $response->erros[] = "El elemento ya ha sido eliminado previamente";
            $response_code = 500;
        }

    }

   
}    