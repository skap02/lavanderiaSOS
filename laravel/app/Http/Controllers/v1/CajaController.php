<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\Caja;
use Illuminate\Http\Request;

class CajaController extends Controller
{
    function getAll()
    {
        $response = new \stdClass();
        $response->success=true;

        $Caja = Caja::all();

        $response->data=$Caja;
        return response()->json($response,200);
    }

    function getItem($id)
    {
        $response = new \stdClass();
        $response->success=true;


        $Caja = Caja::find($id);
        $response->data = $caja;

        return response()->json($response,200);
    }

    function store(Request $request)
    {
        $response = new \stdClass();
        $response->success=true;

        $Caja = new Caja();

        $Caja->dni = $request->dni;
        $Caja->nombre = $request->nombre;
        $Caja->celular = $request->celular;
        $Caja->correo = $request->correo;
        $Caja->dirección = $request->dirección;

        $Caja->save();

        $response->data=$Caja;

        return response()->json($response,201);
    }

    function update(Request $response)
    {
        $response = new \stdClass();
        $response->success = true;

        $Caja = Caja::find($request->id);

        $producto = Producto::find($request->id);

        $Caja->dni = $request->dni;
        $Caja->nombre = $request->nombre;
        $Caja->celular = $request->celular;
        $Caja->correo = $request->correo;
        $Caja->dirección = $request->dirección;
        $Caja->save();

        $response->data = $Caja;

        return response()->json($Caja,200);
    }

    function patch(Request $request)
    {
        $response = new \stdClass();
        $response->success = true;

        $Cajas = Caja::find($request->id);

        if (isset($request->dni))
        $Cajas->dni = $request->dni;
        
        if (isset($request->nombre)) 
        $Cajas->nombre = $request->nombre;

        if (isset($request->celular)) 
        $Cajas->celular = $request->celular;

        if(isset($request->correo))
        $Cajas->correo = $request->correo;

        if(isset($request->dirección))
        $Cajas->dirección = $request->dirección;

        $Cajas->save();


        $Cajas = Caja::find($request->id);

        $Cajas->data = $Cajas;

        return response()->json($Cajas,200);
    }

    function delete($id)
    {
        $response = new \stdClass();
        $response->success = true;

        $response_code;

        $Cajas = Caja::find($id);

        if($Cajas)
        {
            $Cajas->delete();
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