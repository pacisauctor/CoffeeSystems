<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_insumos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_empleado');
            $table->unsignedBigInteger('id_proveedor');

            $table->string('numero_factura');
            $table->string('modo_pago');
            $table->dateTime('fecha_orden');
            $table->dateTime('fecha_recibido');
            $table->timestamps();

            $table->foreign('id_empleado')->references('id')->on('empleados')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_proveedor')->references('id')->on('proveedors')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura_insumos');
    }
}
