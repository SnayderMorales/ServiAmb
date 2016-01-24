<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('solicitudes', function (Blueprint $table) {
          $table->increments('id');
          $table->string('idSolicitud')->unique();
          $table->string('tipoSolicitud');
          $table->string('tipoResiduo');
          $table->string('cantidad');
          $table->string('descripcion');
          $table->string('idEmpresa')->unique();
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
        Schema::drop('solicitudes');
    }
}
