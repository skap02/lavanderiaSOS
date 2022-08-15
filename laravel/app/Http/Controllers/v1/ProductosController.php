<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\Producto;
use Illuminate\Http\Request;

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

        $productos = new Producto();
        $productos->fecha = $request->fecha;
        $productos->dni = $request->dni;
        $productos->nombre = $request->nombre;
        $productos->celular = $request->celular;
        $productos->correo = $request->correo;
        $productos->dirección = $request->dirección;
        $productos->save();

        $response->data=$productos;

        return response()->json($response,201);
    }

    function update(Request $response)
    {
        $response = new \stdClass();
        $response->success = true;

        $productos = Producto::find($request->id);

        $productos->dni = $request->dni;
        $productos->nombre = $request->nombre;
        $productos->celular = $request->celular;
        $productos->correo = $request->correo;
        $productos->dirección = $request->dirección;
        $productos->save();

        $response->data = $productos;

        return response()->json($productos,200);
    }

    function patch(Request $request)
    {
        $response = new \stdClass();
        $response->success = true;

        $productos = Producto::find($request->id);

        if (isset($request->dni))
        $productos->dni = $request->dni;

        if (isset($request->nombre))
        $productos->nombre = $request->nombre;

        if (isset($request->celular))
        $productos->celular = $request->celular;

        if(isset($request->correo))
        $productos->correo = $request->correo;

        if(isset($request->dirección))
        $productos->dirección = $request->dirección;

        $productos->save();

        $response->data = $productos;

        return response()->json($productos,200);
    }

    function delete($id)
    {
        $response = new \stdClass();
        $response->success = true;

        $response_code;

        $productos = Producto::find($id);

        if($productos)
        {
            $productos->delete();
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
