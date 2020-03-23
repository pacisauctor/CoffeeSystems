<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleOrdenProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_orden_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_orden');
            $table->unsignedBigInteger('id_producto');
            $table->integer('cantidad');
            $table->double('precio_unitario');
            $table->double('descuento');
            $table->timestamps();

            $table->foreign('id_orden')->references('id')->on('ordens')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_producto')->references('id')->on('productos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_orden_productos');
    }
}
