<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('nit');
            $table->string('representante');
            $table->string('ciudad');
            $table->string('direccion');
            $table->timestamps();
        });

        Schema::table('convenios', function ($table) {
          $table->integer('empresa')->unsigned();
          $table->foreign('empresa')->references('id')->on('empresas');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
