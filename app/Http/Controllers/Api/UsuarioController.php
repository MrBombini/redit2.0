<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = Usuario::all();
        return response()->json($usuario);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->contraseña = $request->contraseña;
        $usuario->perfil = $request->perfil;
        $usuario->biografia = $request->biografia;
        $usuario->save();
        return response()->json(["message"=>"se registro correctamente"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $usuario = Usuario::find($id);
        if(!empty($usuario)){
            return response()->json($usuario);
        }else{
            return response()->json(["message"=>"el registro no esta a la base de datos"]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->contraseña = $request->contraseña;
        $usuario->perfil = $request->perfil;
        $usuario->biografia = $request->biografia;
        $usuario->save();
        return response()->json(["message"=>"registro actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return response()->json(["message"=>"se elimino correctam"]);
    }
}
