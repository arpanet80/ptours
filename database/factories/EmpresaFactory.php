<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresaFactory extends Factory
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
            'fono' => $this->faker->phoneNumber,
            'propietary_name' => $this->faker->unique()->name,
            'rating' => $this->faker->randomElement([1,2,3,4,5]),
            'status' => $this->faker->boolean(),
        ];
    }
}
