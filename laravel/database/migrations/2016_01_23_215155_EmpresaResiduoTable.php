<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmpresaResiduoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('empresas_residuo', function (Blueprint $table) {
          $table->increments('id');
          $table->string('idEmpresaResiduo')->unique();
          $table->string('idEmpresa')->unique();
          $table->string('idResiduo')->unique();
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
        Schema::drop('empresas_residuo');
    }
}
