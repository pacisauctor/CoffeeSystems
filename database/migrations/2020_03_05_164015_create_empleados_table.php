<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('cedula_identidad');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('sexo');
            $table->integer('edad');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('correo');
            $table->string('estado_civil');
            $table->string('grado_escolaridad');
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
        Schema::dropIfExists('empleados');
    }
}
