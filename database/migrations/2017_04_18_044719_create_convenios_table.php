<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConveniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convenios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('n_convenio');
            $table->string('representante_emp')->nullable();
            $table->string('representante_uni')->nullable();
            $table->string('concepto');
            $table->string('descripcion')->nullable();
            $table->string('costo')->nullable();
            $table->string('archivo');
            $table->string('palabras_clave')->nullable();
            $table->date('fecha_ini');
            $table->date('fecha_fin');
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
        Schema::dropIfExists('convenios');
    }
}
