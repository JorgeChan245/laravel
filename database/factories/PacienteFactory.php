<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nombres'=> $this->faker->name(),
        'apellidos'=> $this->faker->lastName(),
        'celular'=> $this->faker->phoneNumber(),
        'Nro_seguro'=> $this->faker->unique()->numerify('########'),
        'genero'=> $this->faker->randomElement(['H','M']),
        'alergias'=> $this->faker->words(3, true),
        'contacto_emergencia'=>$this->faker->phoneNumber(),
        'observaciones'=>$this->faker->words(3, true),
        'fecha_nacimiento'=> $this->faker->date('Y-m-d', '2020-01-01'),
        'correo'=> $this->faker->unique()->safeEmail(),
        'direccion'=> $this->faker->address(),
        
        ];
    }
}
