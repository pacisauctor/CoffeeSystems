<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleOrdenServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_orden_servicios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_orden');
            $table->unsignedBigInteger('id_servicio');
            $table->integer('cantidad');
            $table->double('precio_unitario');
            $table->double('descuento');
            $table->timestamps();

            $table->foreign('id_orden')->references('id')->on('ordens')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_servicio')->references('id')->on('servicios')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_orden_servicios');
    }
}
