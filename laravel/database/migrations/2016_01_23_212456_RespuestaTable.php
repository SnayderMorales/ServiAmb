<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RespuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('respuestas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('idRespuesta')->unique();
          $table->string('idEmpresa')->unique();
          $table->string('tipoRespuesta');
          $table->string('descripcion');
          $table->double('valor');
          $table->rememberToken();
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
          Schema::drop('respuestas');
    }
}
