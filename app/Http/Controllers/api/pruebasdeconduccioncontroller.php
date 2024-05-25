<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pruebasdeconduccion;
use Illuminate\Support\Facades\DB;

class pruebasdeconduccioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pruebasdeconduccion =DB::table('pruebasdeconduccion')
        ->orderby('id_prueba')
        ->get();
        return json_encode(['pruebasdeconduccion'=>$pruebasdeconduccion]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pruebasdeconduccion = new pruebasdeconduccion();
        $pruebasdeconduccion->id_prueba= $request->id_prueba;
        $pruebasdeconduccion-> id_vehiculo= $request->id_vehiculo;
        $pruebasdeconduccion->id_cliente=$request->id_cliente;
        $pruebasdeconduccion->fecha_prueba=$request->fecha_prueba;
        $pruebasdeconduccion->resultado=$request->resultado;
        


        $pruebasdeconduccion->save();
        return json_encode(['pruebasdeconduccion'=>$pruebasdeconduccion]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pruebasdeconduccion = pruebasdeconduccion::find($id);
        if(is_null($pruebasdeconduccion)){
            return abort(404);
        }
        return json_encode(['pruebasdeconduccion'=>$pruebasdeconduccion]);
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
        $pruebasdeconduccion = new pruebasdeconduccion();
        $pruebasdeconduccion->id_prueba= $request->id_prueba;
        $pruebasdeconduccion-> id_vehiculo= $request->id_vehiculo;
        $pruebasdeconduccion->id_cliente=$request->id_cliente;
        $pruebasdeconduccion->fecha_prueba=$request->fecha_prueba;
        $pruebasdeconduccion->resultado=$request->resultado;
        


        $pruebasdeconduccion->save();
        return json_encode(['pruebasdeconduccion'=>$pruebasdeconduccion]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pruebasdeconduccion = pruebasdeconduccion::find($id);
        $pruebasdeconduccion->delete();
        $pruebasdeconduccions = DB::table('pruebasdeconduccion')
        ->get();
        return json_encode(['pruebasdeconduccions'=>$pruebasdeconduccions,'succes'=>true]);
    }
}
