<?php

namespace Database\Factories;

use App\Models\Paquete;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentariosPaqueteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mensaje' => $this->faker->text(200),
            'user_id' => User::all()->random()->id,
            'paquete_id' => Paquete::all()->random()->id,
        ];
    }
}
