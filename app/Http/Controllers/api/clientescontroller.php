<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clientes;
use Illuminate\Support\Facades\DB;


class clientescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes =DB::table('clientes')
        ->orderby('nombre')
        ->get();
        return json_encode(['clientes'=>$clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new clientes();
        $clientes->id_cliente= $request->id_cliente;
        $clientes-> nombre= $request->nombre;
        $clientes->apellido=$request->apellido;
        $clientes->telefono=$request->telefono;
        $clientes->email=$request->email;
        $clientes->direccion=$request->direccion;
        


        $clientes->save();
        return json_encode(['clientes'=>$clientes]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = clientes::find($id);
        if(is_null($clientes)){
            return abort(404);
        }
        return json_encode(['clientes'=>$clientes]);
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
        $clientes = new clientes();
        $clientes->id_cliente= $request->id_cliente;
        $clientes-> nombre= $request->nombre;
        $clientes->apellido=$request->apellido;
        $clientes->telefono=$request->telefono;
        $clientes->email=$request->email;
        $clientes->direccion=$request->direccion;
        


        $clientes->save();
        return json_encode(['clientes'=>$clientes]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = clientes::find($id);
        $cliente->delete();
        $clientes = DB::table('clientes')
        ->get();
        return json_encode(['clientes'=>$clientes,'succes'=>true]);
    }
}
