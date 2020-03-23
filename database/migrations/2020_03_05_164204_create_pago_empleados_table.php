<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_empleados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_empleado_planilla');
            $table->unsignedBigInteger('id_deposito');
            $table->string('modo_pago');
            $table->string('descripcion');
            $table->timestamps();

            $table->foreign('id_empleado_planilla')->references('id')->on('empleado_planilla')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_deposito')->references('id')->on('depositos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago_empleados');
    }
}
