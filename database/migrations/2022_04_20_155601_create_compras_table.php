<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcompras', function (Blueprint $table) {
            $table->id('idCompra');
            $table->dateTime('fechaCompra');
            $table->string('factura', 20);
            $table->string('provedor', 250);
            $table->double('cantidad', 20, 2);
            $table->dateTime('fechaEntrega');
            $table->unsignedBigInteger('idUsuario');
            $table->foreign('idUsuario')->references('idUsuario')->on('tblusuarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblcompras');
    }
}
