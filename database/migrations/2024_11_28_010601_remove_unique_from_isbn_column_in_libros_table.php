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
    Schema::table('libros', function (Blueprint $table) {
        $table->dropUnique('libros_isbn_unique');  // El nombre de la restricción puede variar
    });
}

public function down()
{
    Schema::table('libros', function (Blueprint $table) {
        $table->unique('isbn');  // Vuelve a agregar la restricción única si es necesario
    });
}

};
