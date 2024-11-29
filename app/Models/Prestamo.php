<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'book_id',
        'fecha_prestamo',
        'fecha_devolucion',
        'estado',
    ];

    // Relación con usuarios
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación con libros
    public function libro()
    {
        return $this->belongsTo(Libro::class, 'book_id');
    }
}
