<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_empleado');
            $table->unsignedBigInteger('id_cliente');
            $table->string('numero_factura');
            $table->dateTime('fecha_orden');
            $table->dateTime('fecha_requerida');
            $table->dateTime('fecha_entrega');
            $table->double('sub_total');
            $table->double('iva');
            $table->double('total');
            $table->timestamps();

            $table->foreign('id_empleado')->references('id')->on('empleados')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_cliente')->references('id')->on('clientes')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordens');
    }
}
