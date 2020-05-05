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
    
    public function guardar(Request $request)
    {
        $validate = $request->validate([
            "name"=> "required|min:3",
            "apellido" => "required|min:3",
            "usuario" => "required|unique:App\Usuarios,usuario|min:3",
            "tipo_usuario"=> "required",
            "email" => "required|email:rfc,dns|unique:App\Usuarios,email",
            "contraseña" => "required|min:3",
            "saldo"=> "required",
            "avatar" => "required",
        ]);

        $insert = DB::table('usuarios')->insert([
            "name"=>  $request->name,
            "apellido" => $request->apellido,
            "usuario" => $request->usuario,
            "tipo_usuario"=> $request->tipo_usuario,
            "email" => $request->email,
            "password" => bcrypt($request->contraseña),
            "saldo"=> $request->saldo,
            "avatar" => $request->avatar,
        ]);
        
        
        return  "Él usuario se ha guardado correctamente";
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
        $consultaUsuario = Usuarios::find($id);
        return view("perfil")
        ->with("user",$consultaUsuario);
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
