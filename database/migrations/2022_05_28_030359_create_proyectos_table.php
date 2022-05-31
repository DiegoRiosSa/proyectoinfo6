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
            $table->foreignId('cliente_id')->constrained('entidads')->default(1)->nullable();
            $table->foreignId('proveedor_id')->constrained('entidads')->default(1)->nullable();
            $table->string('nombre', 25);
            $table->string('fechaInicio', 25);
            $table->float('subtotal',10,2);
            $table->float('iva', 5,2)->nullable();
            $table->float('total', 10,2)->nullable();
            $table->float('porPagar', 10,2)->nullable(); // NUEVO
            $table->float('porRecibir', 10,2)->nullable(); //NUEVO
            $table->string('concepto', 100);
            $table->string('comentariosAdicionales', 200)->nullable();
            $table->enum('estatus', ['Activo','Inactivo'])->nullable()->default('Activo'); 
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
