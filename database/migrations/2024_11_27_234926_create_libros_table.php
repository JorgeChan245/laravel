<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id(); // ID del libro
            $table->string('titulo'); // Título del libro
            $table->string('autor'); // Autor del libro          
            $table->string('editorial')->nullable(); // Editorial (opcional)
            $table->date('año_publicacion')->nullable(); // Fecha de publicación
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
}
