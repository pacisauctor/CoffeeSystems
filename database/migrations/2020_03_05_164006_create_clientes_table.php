<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_persona_contacto');
            $table->string('numero_ruc')->nullable();
            $table->string('nombres');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('correo');
            $table->string('direccion');
            $table->timestamps();

            $table->foreign('id_persona_contacto')->references('id')->on('persona_contactos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
