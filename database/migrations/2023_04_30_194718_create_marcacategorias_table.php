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
        Schema::create('marcacategorias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('marcas_id');
            $table->foreign('marcas_id')->references ('id')->on('marcas');

            $table->unsignedBigInteger('categorias_id');
            $table->foreign('categorias_id')->references ('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marcacategorias');
    }
};
