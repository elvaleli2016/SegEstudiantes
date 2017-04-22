<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasantiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasantias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('estudiante')->unsigned();
            $table->integer('tutor')->unsigned();
            $table->integer('convenio')->unsigned();
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->timestamps();

            $table->foreign('estudiante')->references('id')->on('estudiantes');
            $table->foreign('tutor')->references('id')->on('docentes');
            $table->foreign('convenio')->references('id')->on('convenios');
        });

        Schema::table('periodos', function ($table) {
          $table->integer('pasantia')->unsigned()->nullable();
          $table->foreign('pasantia')->references('id')->on('pasantias');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasantias');
    }
}
