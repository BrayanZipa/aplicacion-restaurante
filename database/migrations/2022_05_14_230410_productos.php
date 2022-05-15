<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('idProductos');
            $table->string('nombre', 40);
            $table->string('codigo', 40);
            $table->double('costo');
            $table->string('unidad', 40);
            $table->string('proveedor', 40);
            $table->unsignedInteger('usuario');  
            $table->foreign('usuario')->references('idUsuarios')->on('usuarios');
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
        Schema::dropIfExists('productos');
    }
}
