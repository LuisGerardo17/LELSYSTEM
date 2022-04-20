<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoActividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_actividad', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->unsignedInteger('actividad_id');
            $table->foreign('actividad_id')->references('id')->on('actividads');

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
        Schema::dropIfExists('curso_actividad');
    }
}
