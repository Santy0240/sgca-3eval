<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ventas;
use Illuminate\Support\Facades\DB;

class ventascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas =DB::table('ventas')
        ->orderby('id_venta')
        ->get();
        return json_encode(['ventas'=>$ventas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ventas = new ventas();
        $ventas->id_venta= $request->id_venta;
        $ventas->id_vehiculo= $request->id_vehiculo;
        $ventas-> id_cliente= $request->id_cliente;
        $ventas->id_empleado=$request->id_empleado;
        $ventas->fecha_venta=$request->fecha_venta;
        $ventas->precio_final=$request->precio_final;
      

        $ventas->save();
        return json_encode(['ventas'=>$ventas]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $ventas = new ventas();
        $ventas->id_venta= $request->id_venta;
        $ventas->id_vehiculo= $request->id_vehiculo;
        $ventas-> id_cliente= $request->id_cliente;
        $ventas->id_empleado=$request->id_empleado;
        $ventas->fecha_venta=$request->fecha_venta;
        $ventas->precio_final=$request->precio_final;
      

        $ventas->save();
        return json_encode(['ventas'=>$ventas]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venta = ventas::find($id);
        $venta->delete();
        $ventas = DB::table('ventas')
        ->get();
        return json_encode(['ventas'=>$ventas,'succes'=>true]);
    }
}
