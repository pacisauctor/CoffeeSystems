<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_deposito');
            $table->unsignedBigInteger('id_mantenimiento');
            $table->string('descripcion')->nullable();
            $table->timestamps();

            $table->foreign('id_deposito')->references('id')->on('depositos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_mantenimiento')->references('id')->on('mantenimientos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago_mantenimientos');
    }
}
