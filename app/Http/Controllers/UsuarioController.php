<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();

        return view('listUsuarios'. ['usuarios'=>$usuarios
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();

        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->correo = $request->correo;
        $usuario->password = $request->password;

        $usuario->save();

        return "usuario registrado correctamente";
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Usuario::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);

        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->correo = $request->correo;
        $usuario->password = $request->password;

        $usuario->save();

        return "usuario registrado correctamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return 'usuario eliminado correctamente';
    }
}
