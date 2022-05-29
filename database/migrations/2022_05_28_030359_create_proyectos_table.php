<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 25);
            $table->string('fechaInicio', 25);
            $table->float('subtotal',7,2);
            $table->float('iva', 5,2);
            $table->float('total', 7,2);
            $table->string('concepto', 100);
            $table->string('comentariosAdicionales', 200)->nullable();
            $table->enum('estatus', ['Activo','Inactivo'])->nullable()->default('Activo');
            $table->string('proveedor', 30); //Cambiar a FK 
            $table->string('cliente', 30);  //Cambiar a FK 
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
        Schema::dropIfExists('proyectos');
    }
};
