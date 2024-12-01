<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;

use Faker\Factory as Faker;

class LibrosTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
  // Definir los géneros posibles
  $generos = ['Románticas', 'Terror', 'Accion', 'Comedia', 'Ficcion', 'Aventura'];
        // Crear 10 libros con datos aleatorios
        foreach (range(1, 120) as $index) {
            Libro::create([
                'titulo' => $faker->sentence(3), // Título aleatorio
                'autor' => $faker->name, // Nombre de autor aleatorio
                'editorial' => $faker->company, // Nombre de editorial aleatorio
                'genero' => $faker->randomElement($generos), // Género aleatorio
                'año_publicacion' => $faker->year, // Año de publicación aleatorio
            ]);
        }
    }
}

    
