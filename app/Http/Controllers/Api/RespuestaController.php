<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Respuesta;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $respuesta = Respuesta::all();
        return response()->json($respuesta);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $respuesta = new Respuesta();
        $respuesta->nombre = $request->nombre;
        $respuesta->usuario = $request->usuario;
        $respuesta->tema = $request->tema;
        $respuesta->save();
        return response()->json(["message" => "Registro Agregado Correctamente!"]);
    }


    public function show($id)
    {
        $respuesta = Respuesta::find($id);
        if (!empty($respuesta)) {
            return response()->json($respuesta);
        } else {
            return response()->json(["message" => " El Registro nose encuetra en la base de datos"]);
        }
    }


    public function update(Request $request, $id)
    {
        $respuesta = Respuesta::find($id);
        $respuesta->nombre = $request->nombre;
        $respuesta->usuario = $request->usuario;
        $respuesta->tema = $request->tema;
        $respuesta->save();
        return response()->json(["message" => "Registro Agregado Correctamente!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Respuesta $respuesta)
    {
        //
    }
}
