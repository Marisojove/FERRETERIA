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
            $table->id('id_compra');
            $table->unsignedBigInteger('id_proveedor');
            $table->unsignedBigInteger('id_empleado');
            $table->unsignedBigInteger('id_producto');
            $table->date('fecha');
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');
            $table->foreign('id_empleado')->references('id_empleado')->on('empleados');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
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
