<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\Servicio;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    function getAll()
    {
        $response = new \stdClass();
        $response->success=true;

        $servicios = Servicio::all();

        $response->data=$servicios;
        return response()->json($response,200);
    }

    function getItem($id)
    {
        $response = new \stdClass();
        $response->success=true;

        $servicios = Servicio::find($id);
        $response->data = $servicios;

        return response()->json($response,200);
    }

    function store(Request $request)
    {
        $response = new \stdClass();
        $response->success=true;

        $servicios = new Servicio();

        $servicios->nombre = $request->nombre;
        $servicios->descripcion = $request->descripcion;
        $servicios->precio = $request->precio;
        $servicios->save();

        $response->data=$servicios;

        return response()->json($response,201);
    }

    function update(Request $response)
    {
        $response = new \stdClass();
        $response->success = true;

        $servicios = Servicio::find($request->id);

        $servicios->nombre = $request->nombre;
        $servicios->descripcion = $request->descripcion;
        $servicios->precio = $request->precio;
        $servicios->save();


        $response->data = $servicios;

        return response()->json($servicios,200);
    }

    function patch(Request $request)
    {
        $response = new \stdClass();
        $response->success = true;

        $servicios = Servicio::find($request->id);

        if (isset($request->nombre))
        $productos->nombre = $request->nombre;

        if (isset($request->descripción))
        $servicios->description = $request->descripcion;

        if(isset($request->precio))
        $servicios->precio = $request->precio;

        $servicios->save();

        $response->data = $servicios;

        return response()->json($servicios,200);
    }

    function delete($id)
    {
        $response = new \stdClass();
        $response->success = true;

        $response_code;

        $servicios = Servicios::find($id);

        if($servicios)
        {
            $servicios->delete();
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
