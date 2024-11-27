<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    // Campos asignables en la base de datos para la tabla "libros"
    protected $fillable = ['titulo', 'autor', 'isbn', 'editorial', 'publicado_en', 'categoria_id'];

    // Relación con la tabla "categorias" (opcional)
    public function categoria()
    {
        
    }

    // Si los libros tienen préstamos
    public function prestamos()
    {
       
    }
}
