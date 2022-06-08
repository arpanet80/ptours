<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HabitacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text(100),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999),
            'quantity' => $this->faker->randomNumber($nbDigits = 2, $strict = false),
            'rating' => $this->faker->randomElement([1,2,3,4,5]),
            'status' => $this->faker->randomElement([0,1]),

            //'tipo_cuarto_id' => Tipo_cuarto::all()->random()->id,
            //'hotel_id' => Hotel::all()->random()->id,
        ];
    }
}
