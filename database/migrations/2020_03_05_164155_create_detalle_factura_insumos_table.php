<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleFacturaInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_factura_insumos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_factura_insumo');
            $table->unsignedBigInteger('id_insumo');
            $table->integer('cantidad');
            $table->double('precio');
            $table->double('descuento');
            $table->timestamps();

            $table->foreign('id_factura_insumo')->references('id')->on('factura_insumos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_factura_insumos');
    }
}
