<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\cliente;

class ClientesController extends Controller
{
    function getAll()
    {
        $response = new \stdClass();
        $response->success=true;

        $clientes = cliente::all();

        $response->data=$clientes;
        return response()->json($response,200);
    }

    function getItem($id)
    {
        $response = new \stdClass();
        $response->success=true;

        $clientes = cliente::find($id);
        $response->data = $clientes;

        return response()->json($response,200);
    }

    function store(Request $request)
    {
        $response = new \stdClass();
        $response->success=true;

        $clientes = new Producto();
        $clientes->dni = $request->dni;
        $clientes->nombre = $request->nombre;
        $clientes->celular = $request->celular;
        $clientes->correo = $request->correo;
        $clientes->dirección = $request->dirección;
        $clientes->fecha = $request->fecha;
        $clientes->save();

        $response->data=$clientes;

        return response()->json($response,201);
    }

    function update(Request $response)
    {
        $response = new \stdClass();
        $response->success = true;

        $producto = Producto::find($request->id);

        $clientes->dni = $request->dni;
        $clientes->nombre = $request->nombre;
        $clientes->celular = $request->celular;
        $clientes->correo = $request->correo;
        $clientes->dirección = $request->dirección;
        $clientes->fecha = $request->fecha;
        $producto->save();

        $response->data = $clientes;

        return response()->json($clientes,200);
    }

    function patch(Request $request)
    {
        $response = new \stdClass();
        $response->success = true;

        $clientes = cliente::find($request->id);

        if(isset($request->codigo))
        $producto->codigo = $request->codigo;

        if (isset($request->nombre))
        $clientes->nombre = $request->nombre;

        $clientes->save();

        $clientes->data = $clientes;

        return response()->json($clientes,200);
    }

    function delete($id)
    {
        $response = new \stdClass();
        $response->success = true;

        $response_code;

        $clientes = cliente::find($id);

        if($clientes)
        {
            $clientes->delete();
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
