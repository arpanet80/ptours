<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name,
            'address' => $this->faker->streetAddress,
            'coordinates' => $this->faker->latitude(-19.65431, -19.60170) . ',' . $this->faker->longitude(-65.52512, -65.57000),
            'description' => $this->faker->text(100),
            'rating' => $this->faker->randomElement([1,2,3,4,5]),
            'status' => $this->faker->boolean(),
        ];
    }
}
