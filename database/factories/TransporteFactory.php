<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransporteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->unique()->sentence(),
            'description' => $this->faker->text(100),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999),
            'quantity' => $this->faker->randomNumber($nbDigits = 2, $strict = false),
            'rating' => $this->faker->randomElement([1,2,3,4,5]),
            'empresa_id' => Empresa::all()->random()->id,
        ];
    }
}
