<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoPlanillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_planillas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_empleado');
            $table->unsignedBigInteger('id_planilla');
            $table->double('salario_base');
            $table->double('comisiones');
            $table->double('salario_bruto');
            $table->double('inss_laboral');
            $table->double('ir');
            $table->double('salario_total');
            $table->timestamps();

            $table->foreign('id_empleado')->references('id')->on('empleados')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_planilla')->references('id')->on('planillas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado_planillas');
    }
}
