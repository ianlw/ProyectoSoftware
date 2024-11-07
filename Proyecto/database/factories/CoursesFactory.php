<?php

namespace Database\Factories;

use App\Models\Courses;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Courses>
 */
class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_completo' => $this->faker->name(),
            'asignatura' => $this->faker->word(), // Simula el nombre de la asignatura
            'nota1' => $this->faker->numberBetween(0, 20), // Genera un número entre 0 y 20
            'nota2' => $this->faker->numberBetween(0, 20),
            'nota3' => $this->faker->numberBetween(0, 20),
        ];
    }
}

