<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->id('id_factura');
            $table->unsignedBigInteger('id_detalle');
            $table->unsignedBigInteger('id_cliente');
            $table->integer('precio');
            $table->foreign('id_detalle')->references('id_detalle')->on('detalle');
            $table->foreign('id_cliente')->references('id_cliente')->on('cliente');
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
        Schema::dropIfExists('factura');
    }
}
