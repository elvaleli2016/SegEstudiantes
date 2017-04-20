<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('estudiante')->unsigned();
            $table->integer('tutor')->unsigned();
            $table->timestamps();

            $table->foreign('estudiante')->references('id')->on('estudiantes');
            $table->foreign('tutor')->references('id')->on('docentes');
        });

        Schema::table('periodos', function ($table) {
          $table->integer('practica')->unsigned()->nullable();
          $table->foreign('practica')->references('id')->on('practicas');
        });

        Schema::table('convenios', function ($table) {
          $table->integer('practica')->unsigned()->nullable();
          $table->foreign('practica')->references('id')->on('practicas');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practicas');
    }
}
