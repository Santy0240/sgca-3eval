<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\financiamiento;
use Illuminate\Support\Facades\DB;

class financimienrtocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financiamientos =DB::table('financiamiento')
        ->get();
        $vehiculos =DB::table('vehiculos')
        ->orderby('marca')
        ->get();
        
        return json_encode(['financiamientos'=>$financiamientos,'vehiculos'=>$vehiculos]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $financiamiento = new financiamiento();
        $financiamiento->id_financiamiento= $request->id_financiamiento;
        $financiamiento->id_venta= $request->id_venta;
        $financiamiento->monto_financiado=$request->monto_financiado;
        $financiamiento->taza_interez=$request->taza_interez;
        $financiamiento->plazo_meses=$request->plazo_meses;
        $financiamiento->fecha_inicio=$request->fecha_inicio;
        


        $financiamiento->save();
        return json_encode(['financiamiento'=>$financiamiento]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $financiamiento = financiamiento::find($id);
        if(is_null($financiamiento)){
            return abort(404);
        }
        return json_encode(['financiamiento'=>$financiamiento]);
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
        $financiamiento = new financiamiento();
        $financiamiento->id_financiamiento= $request->id_financiamiento;
        $financiamiento->id_venta= $request->id_venta;
        $financiamiento->monto_financiado=$request->monto_financiado;
        $financiamiento->taza_interez=$request->taza_interez;
        $financiamiento->plazo_meses=$request->plazo_meses;
        $financiamiento->fecha_inicio=$request->fecha_inicio;
        


        $financiamiento->save();
        return json_encode(['financiamiento'=>$financiamiento]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $financiamiento = financiamiento::find($id);
        $financiamiento->delete();
        $financiamientos = DB::table('financiamiento')
        ->get();
        return json_encode(['financiamientos'=>$financiamientos,'succes'=>true]);
    }
}
