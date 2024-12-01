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
        Schema::dropIfExists('prestamos');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         // Recreate the table in case of rollback
    // Migración de la tabla 'prestamos'
Schema::create('prestamos', function (Blueprint $table) {
    $table->id();
    $table->foreignId('book_id')->constrained('libros')->onDelete('cascade'); // La clave foránea
    $table->date('fecha_prestamo');
    $table->date('fecha_devolucion');
    $table->timestamps();
});

    }
};
