<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitacorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblbitacoras', function (Blueprint $table) {
            $table->id('idBitacora');
            $table->unsignedBigInteger('idUsuario');
            $table->unsignedBigInteger('claveAccion');
            $table->dateTime('fechaMovimiento');
            $table->mediumText('observaciones');

            $table->foreign('idUsuario')->references('idUsuario')->on('tblusuarios');
            $table->foreign('claveAccion')->references('claveAccion')->on('tblacciones'); //pending to acctions
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitacoras');
    }
}
