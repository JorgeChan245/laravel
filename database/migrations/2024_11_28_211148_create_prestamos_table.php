<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id(); // ID único para cada préstamo
            $table->unsignedBigInteger('user_id'); // Relación con usuarios
            $table->unsignedBigInteger('book_id'); // Relación con libros
            $table->date('fecha_prestamo'); // Fecha del préstamo
            $table->date('fecha_devolucion')->nullable(); // Fecha de devolución
            $table->string('estado')->default('pendiente'); // Estado del préstamo
            $table->timestamps(); // created_at y updated_at

            // Llaves foráneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}

