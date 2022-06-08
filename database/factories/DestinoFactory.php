<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DestinoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(50),
            'description_short' => $this->faker->text(150),
            'description_large' => $this->faker->text(700),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999),
            'rating' => $this->faker->randomElement([1,2,3,4,5]),
            'duration' => $this->faker->randomElement([1,2,3,4,5]),
            'languaje' => $this->faker->randomElement(['Español', 'Ingles', 'Aleman', 'Quechua']),
            'startplace' => $this->faker->country(),
            'endplace' => $this->faker->country(),
            'itinerary' => $this->faker->text(200),
            'route' => $this->faker->country() . ','.$this->faker->country() . ','.$this->faker->country(),
            'attractive' => $this->faker->text(500),


            //'status' => $arrayStatus[rand(0,1)],
            //'status' => $this->faker->randomElement([0,1]),
            //'status' => $this->faker->boolean(),
            'user_id' => User::all()->random()->id,
        ];
    }
}
