<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servico>
 */
class ServicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(){
        return [
            'cliente' => $this->faker->name,
            'servico' => $this->faker->word,
            'data_inicio' => $this->faker->date,
            'data_final' => $this->faker->date,
        ];
    }
}
