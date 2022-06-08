<?php

namespace Database\Factories;

use App\Models\Destino;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentariosDestinoFactory extends Factory
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
           'destino_id' => Destino::all()->random()->id,
        ];
    }
}
