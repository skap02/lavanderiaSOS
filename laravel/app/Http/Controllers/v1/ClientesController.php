<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    function getAll(Request $request)
    {
        $search = $request->search;

        $fecha_inicio = $request->fecha_inicio;
        $fecha_fin = $request->fecha_fin;

        //$categoria = $request->categorias;

        /*if(!isset($categoria))
            $categoria = "%";
        else
            $categoria = "%".$categoria."%";*/

        if(!isset($fecha_inicio))
            $fecha_inicio = "2022-01-01 00:00:00";

        if(!isset($fecha_fin))
            $fecha_fin = "3000-01-01 23:59:59";

        if (!isset($search))
            $search="%";
        else
            $search="%".$search."%";
        
        $response = new \stdClass();
        $response->success=true;

        //$clientes = Cliente::all();
        $clientes = Cliente::where(function($q) use ($search){
        $q->where("nombre","like",$search)
        ->orwhere("correo","like",$search);

        })
        ->select("clientes.*")


        ->where("created_at",">=",$fecha_inicio." 00:00:00")
        ->where("created_at","<=",$fecha_fin." 23:59:59")
        /*->where(function($q) use($categoria){

            if ($categoria!="%") {
                $q->where("categorias.nombre","like",$categoria);
            }
        })*/
        //->where("categorias.nombre","like",$categoria)
        //->leftJoin("categorias","clientes.categorias_id","=","categorias.id")
        ->get();

        $response->data=$clientes;
        return response()->json($response,200);
    }

    function getItem($id)
    {
        $response = new \stdClass();
        $response->success=true;


        $clientes = Cliente::find($id);
        $response->data = $clientes;

        return response()->json($response,200);
    }

    function store(Request $request)
    {
        $response = new \stdClass();
        $response->success=true;

        $clientes = new Cliente();

        $clientes->dni = $request->dni;
        $clientes->nombre = $request->nombre;
        $clientes->celular = $request->celular;
        $clientes->correo = $request->correo;
        $clientes->direccion = $request->direccion;

        $clientes->save();

        $response->data=$clientes;

        return response()->json($response,201);
    }

    function update(Request $response)
    {
        $response = new \stdClass();
        $response->success = true;

        $clientes = Cliente::find($request->id);

        $clientes->dni = $request->dni;
        $clientes->nombre = $request->nombre;
        $clientes->celular = $request->celular;
        $clientes->correo = $request->correo;
        $clientes->direccion = $request->direccion;
        $clientes->save();

        $response->data = $clientes;

        return response()->json($clientes,200);
    }

    function patch(Request $request)
    {
        $response = new \stdClass();
        $response->success = true;

        $clientes = Cliente::find($request->id);

        if (isset($request->dni))
        $clientes->dni = $request->dni;
        
        if (isset($request->nombre)) 
        $clientes->nombre = $request->nombre;

        if (isset($request->celular)) 
        $clientes->celular = $request->celular;

        if(isset($request->correo))
        $clientes->correo = $request->correo;

        if(isset($request->direccion))
        $clientes->direccion = $request->direccion;

        $clientes->save();


        $clientes = cliente::find($request->id);

        $clientes->data = $clientes;

        return response()->json($clientes,200);
    }

    function delete($id)
    {
        $response = new \stdClass();
        $response->success = true;

        $response_code;

        $clientes = Cliente::find($id);

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