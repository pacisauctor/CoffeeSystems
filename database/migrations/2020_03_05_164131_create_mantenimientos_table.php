<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_proveedor');
            $table->unsignedBigInteger('id_empleado');
            $table->string('numero_factura');
            $table->dateTime('fecha');
            $table->string('tipo');
            $table->string('descripcion');
            $table->double('costo');
            $table->timestamps();

            $table->foreign('id_proveedor')->references('id')->on('proveedors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_empleado')->references('id')->on('empleados')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mantenimientos');
    }
}
