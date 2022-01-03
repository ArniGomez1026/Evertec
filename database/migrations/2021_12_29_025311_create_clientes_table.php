<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {

            $table->id();
            $table->bigInteger('documento');
            $table->string('name');
            $table->string('apellidos');
            // para el campo doc_id se gestiona la relación con la tabla tipo docs
            $table->bigInteger('doc_id')->unsigned();
            $table->foreign('doc_id')->references('id')->on('tipo_docs'); 
            $table->string('dirección');
            $table->bigInteger('celular');
            $table->boolean('estado');
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
        Schema::dropIfExists('clientes');
    }
}
