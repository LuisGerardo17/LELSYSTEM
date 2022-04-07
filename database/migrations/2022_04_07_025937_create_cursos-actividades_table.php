<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos-actividades', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_actividad',5);
            $table->foreign('codigo_actividad')->references('codigo_actividad')->on('actividades');
            $table->string('codigo_curso',5);
            $table->foreign('codigo_curso')->references('codigo_curso')->on('cursos');
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
        Schema::dropIfExists('cursos-actividades');
    }
}
