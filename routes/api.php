<?php

use App\Http\Controllers\api\clientescontroller;
use App\Http\Controllers\api\financimienrtocontroller;
use App\Http\Controllers\api\pruebasdeconduccioncontroller;
use App\Http\Controllers\api\vehiculoscontroller;
use App\Http\Controllers\api\ventascontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
});
    Route::get('/vehiculos',[vehiculoscontroller::class,'index'])->name('vehiculos.index');
    Route::post('/vehiculos',[vehiculoscontroller::class,'store'])->name('vehiculos.store');
    Route::delete('/vehiculos/{vehiculo}',[vehiculoscontroller::class,'destroy'])->name('vehiculos.destroy');
    Route::put('/vehiculos/{vehiculo}',[vehiculoscontroller::class,'update'])->name('vehiculos.update');
    Route::get('/vehiculos/{vehiculo}/edit',[vehiculoscontroller::class,'edit'])->name('vehiculos.edit');
    
    //rutas clientes
    Route::get('/clientes',[clientescontroller::class,'index'])->name('clientes.index');
    Route::post('/clientes',[clientescontroller::class,'store'])->name('clientes.store');
    Route::delete('/clientes/{cliente}',[clientescontroller::class,'destroy'])->name('clientes.destroy');
    Route::put('/clientes/{cliente}',[clientescontroller::class,'update'])->name('clientes.update');
    Route::get('/clientes/{cliente}/edit',[clientescontroller::class,'edit'])->name('clientes.edit');
    
    //rutas ventas
    Route::get('/ventas',[ventascontroller::class,'index'])->name('ventas.index');
    Route::post('/ventas',[ventascontroller::class,'store'])->name('ventas.store');
    Route::delete('/ventas/{venta}',[ventascontroller::class,'destroy'])->name('ventas.destroy');
    Route::put('/ventas/{venta}',[ventascontroller::class,'update'])->name('ventas.update');
    Route::get('/ventas/{venta}/edit',[ventascontroller::class,'edit'])->name('ventas.edit');
    
    //rutas financiamiento
    Route::get('/financiamientos',[financimienrtocontroller::class,'index'])->name('financiamientos.index');
    Route::post('/financiamientos',[financimienrtocontroller::class,'store'])->name('financiamientos.store');
    Route::delete('/financiamientos/{financiamiento}',[financimienrtocontroller::class,'destroy'])->name('financiamientos.destroy');
    Route::put('/financiamientos/{financiamiento}',[financimienrtocontroller::class,'update'])->name('financiamientos.update');
    Route::get('/financiamientos/{fiananciamiento}/edit',[financimienrtocontroller::class,'edit'])->name('financiamientos.edit');
    
    //rutas pruebas de conduccion
    Route::get('/pruebasdeconducciones',[pruebasdeconduccioncontroller::class,'index'])->name('pruebasdeconducciones.index');
    Route::post('/pruebasdeconducciones',[pruebasdeconduccioncontroller::class,'store'])->name('pruebasdeconducciones.store');
    Route::delete('/pruebasdeconducciones/{/pruebasdeconduccion}',[pruebasdeconduccioncontroller::class,'destroy'])->name('pruebasdeconducciones.destroy');
    Route::put('/pruebasdeconducciones/{/pruebasdeconduccion}',[pruebasdeconduccioncontroller::class,'update'])->name('pruebasdeconducciones.update');
    Route::get('/pruebasdeconducciones/{/pruebasdeconduccion}/edit',[pruebasdeconduccioncontroller::class,'edit'])->name('pruebasdeconducciones.edit');
    