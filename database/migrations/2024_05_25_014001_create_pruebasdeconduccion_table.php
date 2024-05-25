<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pruebasdeconduccion', function (Blueprint $table) {
            $table->id('id_prueba')->unique();
            $table->integer('id_vehiculo');
            $table->integer('id_cliente');
            $table->date('fecha_prueba');
            $table->string('resultado');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pruebasdeconduccion');
    }
};
