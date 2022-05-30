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
        Schema::create('entidads', function (Blueprint $table) {
            $table->id();
            $table->string('razonSocial', 25);
            $table->enum('persona', ['Fisica','Moral'])->nullable()->default('Fisica');
            $table->string('RFC', 25);
            $table->string('domicilio', 25);
            $table->string('email', 30);
            $table->float('telefono', 10);
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
        Schema::dropIfExists('entidads');
    }
};
