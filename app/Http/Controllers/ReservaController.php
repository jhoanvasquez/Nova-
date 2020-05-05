<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Reserva;
use App\inventario;





class ReservaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function home()
    {
    return view("index");
    }


    public function index()
    {
        $reserva = DB::table('reservas')
        ->orderBy("date","ASC")
        ->join('usuarios', 'reservas.usuario', '=', 'usuarios.usuario')
        ->paginate(10);
        return view("consulta-reserva")->with("reserva",$reserva);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {   
        
        $users = DB::table('usuarios')
        ->select('usuario')
        ->get();
        return view("nueva-reserva")
        ->with("users", $users);
        
        
        
    }

    public function inventario()
    {   
        
        $inventario =inventario::find(1);
        return view("inventario")
        ->with("inventario", $inventario);
        
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
            "usuario"=> "required ",
            "date" => "required",
            "hora" => "required",
        ]);


        $insert = DB::table('reservas')->insert([
            "date" =>   $date,
            "hora" =>   $hora,
            "usuario" =>   $usuario,
         ]);

         return [$request, $request->hora];
        //return explode("=",utf8_decode(urldecode($serial[2])))[1];
        
    }

    public function busqueda(Request $request)
    {
        $consultaReserva = DB::table('reservas')
        ->orderBy("date","ASC")
        ->where('date',"=", $request->fecha)
        ->get();
        return $consultaReserva;
    }

    public function busquedaReserva(Request $request)
    {
        $consultaReserva = DB::table('reservas')
        ->orderBy("date","ASC")
        ->join('usuarios', 'reservas.usuario', '=', 'usuarios.usuario')
        ->where('date',"=", $request->fecha)
        ->get();
        return $consultaReserva;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function today()
    {
        date_default_timezone_set("America/Bogota");
        $date = date("Y-m-d");
        $users = DB::table('reservas')
        ->orderBy("hora","ASC")
        ->join('usuarios', 'reservas.usuario', '=', 'usuarios.usuario')
        ->where('date',"=", $date)
        ->get();
        return $users;
        
        
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
