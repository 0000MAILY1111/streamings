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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('slug');
            $table->text('descripcion');
            $table->float('precio');

            $table->unsignedBigInteger('subcategorias_id');
            $table->foreign('subcategorias_id')->references ('id')->on('subcategorias');
        
            $table->unsignedBigInteger('marcas_id');
            $table->foreign('marcas_id')->references ('id')->on('marcas');

            $table->integer('cantidad');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
