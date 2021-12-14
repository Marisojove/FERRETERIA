<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('idventa');
            $table->unsignedBigInteger('idempleado');
            $table->unsignedBigInteger('idproducto');
            $table->unsignedBigInteger('idcliente');


            $table->foreign('idempleado')->references('idempleado')->on('empleados');
            $table->foreign('idproducto')->references('idproducto')->on('productos');
            $table->foreign('idcliente')->references('idcliente')->on('clientes');
            $table->string('precio');
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
        Schema::dropIfExists('ventas');
    }
}
