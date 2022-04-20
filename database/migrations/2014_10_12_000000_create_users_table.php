<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblusuarios', function (Blueprint $table) {
            $table->id('idUsuario');
            $table->string('nombre', 45);
            $table->string('paterno', 45);
            $table->string('materno', 45);
            $table->string('login')->unique();
            $table->string('password');
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
        Schema::dropIfExists('tblusuarios');
    }
}
