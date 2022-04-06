<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('cedula',12)->primary()->unique();
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('correo',25)->unique();
            $table->string('direccion',200);
            $table->string('telefono',15)->unique();
            $table->string('contraseña',12);
            $table->string('nombre_rol',20);
            $table->foreign('nombre_rol',20)->references('nombre_rol')->on('roles');

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
        Schema::dropIfExists('usuarios');
    }
}
