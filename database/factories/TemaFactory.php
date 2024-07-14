<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tema>
 */
class TemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'cuerpo' => $this->faker->word(),
            'usuario' => $this->faker->numberBetween(1,5),
            'categoria' => $this->faker->numberBetween(1,5),
        ];
    }
}
