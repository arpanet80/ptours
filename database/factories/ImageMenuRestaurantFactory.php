<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageMenuRestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $file = $this->faker->randomElement(['01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21']);
        return [
            //'name' => $this->faker->unique()->name,
            //'description' => $this->faker->text(300),
            //'url' => 'menu-restaurants/' . $this->faker->image('public/storage/menu-restaurants', 640, 480, null, false),
            'url' => '/storage/images/' . $file . '.jpg',
        ];
    }
}
