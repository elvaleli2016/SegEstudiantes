<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('usuarios');
        });

        Schema::table('practicas', function ($table) {
          $table->integer('tutor_emp')->unsigned()->nullable();
          $table->foreign('tutor_emp')->references('id')->on('tutors');
        });
        Schema::table('pasantias', function ($table) {
          $table->integer('tutor_emp')->unsigned()->nullable();
          $table->foreign('tutor_emp')->references('id')->on('tutors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutors');
    }
}
