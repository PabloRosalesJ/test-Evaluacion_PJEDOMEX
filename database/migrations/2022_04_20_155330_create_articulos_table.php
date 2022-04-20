<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblarticulos', function (Blueprint $table) {
            $table->id('idArticulo');
            $table->string('descArticulo');
            $table->integer('existentes')->unsigned();
            $table->dateTime('fechaEntrega');
            $table->char('activo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblarticulos');
    }
}
