<?php

namespace Database\Seeders;

use App\Models\ImageMenuRestaurant;
use App\Models\ImageRestaurant;
use App\Models\Restaurant;
use App\Models\RestaurantMenu;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = Restaurant::factory(5)->create();

        foreach ($restaurants as $restaurant) {
            ImageRestaurant::factory(2)->create([
                'restaurant_id' => $restaurant->id
            ]);
            //$this->call(RestaurantMenuSeeder::class);
            $restaurant_menus = RestaurantMenu::factory(2)->create([
                'restaurant_id' => $restaurant->id
            ]);
            foreach ($restaurant_menus as $restaurant_menu) {
                ImageMenuRestaurant::factory(2)->create([
                    'restaurant_menu_id' => $restaurant_menu->id
                ]);
            }
        }
    }
}
