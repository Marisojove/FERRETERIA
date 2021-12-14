<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->bigIncrements('idcompra');
            $table->unsignedBigInteger('idproveedor');
            $table->unsignedBigInteger('idempleado');
            $table->unsignedBigInteger('idproducto');
            $table->foreign('idproveedor')->references('idproveedor')->on('proveedores');
            $table->foreign('idempleado')->references('idempleado')->on('empleados');
            $table->foreign('idproducto')->references('idproducto')->on('productos');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
