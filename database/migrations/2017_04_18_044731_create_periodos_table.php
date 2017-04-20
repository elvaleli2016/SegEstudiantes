<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha_dia');
            $table->string('tipo_periodo');
            $table->integer('id_pasantia')->unsigned()->nullable();
            $table->integer('id_pactica')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('id_practica')->references('id')->on('pacticas');
            $table->foreign('id_pasantia')->references('id')->on('pasantias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periodos');
    }
}
