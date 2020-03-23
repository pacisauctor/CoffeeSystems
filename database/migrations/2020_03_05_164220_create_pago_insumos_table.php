<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_insumos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_deposito');
            $table->unsignedBigInteger('id_factura_insumo');
            $table->string('descripcion')->nullable();
            $table->timestamps();

            $table->foreign('id_deposito')->references('id')->on('depositos')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('pago_insumos');
    }
}
