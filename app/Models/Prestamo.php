<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'libro_id',
        'fecha_prestamo',
        'fecha_devolucion',
     
    ];

    // Relación con usuarios
    public function user()
    {
        return $this->belongsTo(User::class);
        return $this->belongsTo(User::class); // Ajusta el nombre del modelo según sea necesario
    }

    // Relación con libros
    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }
}