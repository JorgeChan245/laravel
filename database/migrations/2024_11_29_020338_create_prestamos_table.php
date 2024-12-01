<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Relación con usuarios
            $table->unsignedBigInteger('libro_id'); // Relación con libros
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion')->nullable();
            $table->string('estado')->default('pendiente');
            $table->timestamps();
    
            // Claves foráneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('libro_id')->references('id')->on('libros')->onDelete('cascade');
        });
    }
    
};
