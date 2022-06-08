<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
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
            'url' => '/storage/images/' . $file . '.jpg',
            'status' => $this->faker->boolean(),
            'user_id' => 1,
            'tipo_media_id' => 2,

        ];
    }
}
