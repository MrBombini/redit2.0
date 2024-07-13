<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tema;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class TemasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $temas = Tema::all();
        return response()->json($temas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tema = new Tema();
        $tema->nombre = $request->nombre;
        $tema->cuerpo = $request->cuerpo;
        $tema->usuario = $request->usuario;
        $tema->categoria = $request->categoria;
        $tema->save();
        return response()->json(["message"=>"se registro correctamente"]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tema = Tema::find($id);
        if(!empty($tema)){
            return response()->json($tema);
        }else{
            return response()->json(["message"=>"el registro no esta a la base de datos"]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Integer $id)
    {
        $tema = Tema::find($id);
        $tema->nombre = $request->nombre;
        $tema->cuerpo = $request->cuerpo;
        $tema->usuario = $request->usuario;
        $tema->categoria = $request->categoria;
        $tema->save();
        return response()->json(["message"=>"registro actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Integer $id)
    {
        $tema = Tema::find($id);
        $tema->delete();
        return response()->json(["message"=>"se elimino correctam"]);
    }
}
