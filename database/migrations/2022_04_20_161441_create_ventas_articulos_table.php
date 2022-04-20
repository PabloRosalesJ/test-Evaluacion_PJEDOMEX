<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblventasarticulos', function (Blueprint $table) {
            $table->id('idVentaArticulo');
            $table->unsignedBigInteger('idVenta');
            $table->unsignedBigInteger('idArticulo');
            $table->integer('cantidadArticulo');
            $table->integer('exisencias');

            $table->foreign('idVenta')->references('idVenta')->on('tblventas');
            $table->foreign('idArticulo')->references('idArticulo')->on('tblarticulos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblventasarticulos');
    }
}
