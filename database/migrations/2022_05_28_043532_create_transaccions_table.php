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
        Schema::create('transaccions', function (Blueprint $table) {
            $table->id();
            $table->enum('tipoTransaccion', ['Anticipo', 'Pago'])->nullable()->default('Pago');
            $table->float('monto', 8);
            $table->string('fechaTransaccion', 25);
            $table->enum('metodo', ['Deposito', 'Transferencia'])->nullable()->default('Deposito');
            $table->float('referencia', 10);
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
        Schema::dropIfExists('transaccions');
    }
};