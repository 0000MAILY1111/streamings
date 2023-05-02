<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('colorproductos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('colores_id');
            $table->foreign('colores_id')->references ('id')->on('colores');

            $table->unsignedBigInteger('productos_id');
            $table->foreign('productos_id')->references ('id')->on('productos');

            $table->integer('cantidad');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colorproductos');
    }
};
