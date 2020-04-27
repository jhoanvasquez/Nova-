<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Usuarios;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $usuario = DB::table('usuarios')
        ->orderBy("id_user","ASC")
        ->select("name", "apellido", "usuario", "email", "tipo_usuario","saldo")
        ->paginate(10);
        $users = DB::table('usuarios')
        ->select('usuario')
        ->get();
        return view("consulta-usuario")
        ->with("users",$users)
        ->with("usuario",$usuario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view("nuevo-usuario");
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $usuario = $request->except("_token");
        Usuarios::insert($usuario);
        return view("confirmacion");
        
    }

    public function busquedaUsuario(Request $request)
    {
        $consultaUsuario = DB::table('usuarios')
        ->where('usuario',"=", $request->usuario)
        ->get();
        return $consultaUsuario;
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
