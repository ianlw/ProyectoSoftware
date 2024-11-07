<?php

namespace Database\Factories;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'tipo_tramite' => $this->faker->randomElement(['PLATAFORMA', 'VENTANILLA']),
            'fecha' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'estado' => $this->faker->randomElement([0, 1]),
        ];
    }
}
