<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vehiculos;
use App\Models\ventas;
use Illuminate\Support\Facades\DB;


class vehiculoscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos =DB::table('vehiculos')
        ->orderby('marca')
        ->get();
        return json_encode(['vehiculos'=>$vehiculos]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculos = new vehiculos();
        $vehiculos->id_vehiculo= $request->id_vehiculo;
        $vehiculos-> marca= $request->marca;
        $vehiculos->modelo=$request->modelo;
        $vehiculos->año=$request->año;
        $vehiculos->precio=$request->precio;
        $vehiculos->estado=$request->estado;
        $vehiculos->stock=$request->stock;


        $vehiculos->save();
        return json_encode(['vehiculos'=>$vehiculos]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ventas = ventas::find($id);
        if(is_null($ventas)){
            return abort(404);
        }
        return json_encode(['ventas'=>$ventas]);
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
        $vehiculos = new vehiculos();
        $vehiculos->id_vehiculo= $request->id_vehiculo;
        $vehiculos-> marca= $request->marca;
        $vehiculos->modelo=$request->modelo;
        $vehiculos->año=$request->año;
        $vehiculos->precio=$request->precio;
        $vehiculos->estado=$request->estado;
        $vehiculos->stock=$request->stock;


        $vehiculos->save();
        return json_encode(['vehiculos'=>$vehiculos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo = vehiculos::find($id);
        $vehiculo->delete();
        $vehiculos = DB::table('vehiculos')
        ->get();
        return json_encode(['vehiculos'=>$vehiculos,'succes'=>true]);
    }
}
