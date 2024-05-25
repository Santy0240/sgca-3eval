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
        Schema::create('financiamiento', function (Blueprint $table) {
            $table->id('id_financiamiento')->unique();
            $table->integer('id_venta');
            $table->integer('monto_financiado');
            $table->integer('taza_interez');
            $table->integer('plazo_meses');
            $table->date('fecha_inicio');
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
        Schema::dropIfExists('financiamiento');
    }
};
