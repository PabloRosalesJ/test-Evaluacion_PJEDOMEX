<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcomprasarticulos', function (Blueprint $table) {
            $table->id('idComprasArticulo');
            $table->unsignedBigInteger('idArticulo');
            $table->unsignedBigInteger('idCompra');
            $table->unsignedInteger('cantidadArticulo');
            $table->unsignedInteger('existencias');


            $table->foreign('idArticulo')->references('idArticulo')->on('tblarticulos');
            $table->foreign('idCompra')->references('idCompra')->on('tblcompras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblcomprasarticulos');
    }
}
