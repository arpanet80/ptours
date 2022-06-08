<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        /*Storage::deleteDirectory('restaurants');
        Storage::deleteDirectory('menu-restaurants');
        Storage::deleteDirectory('habitaciones');

        Storage::makeDirectory('restaurants');
        Storage::makeDirectory('menu-restaurants');
        Storage::makeDirectory('habitaciones');*/

        $this->call(UserSeeder::class);
        \App\Models\User::factory(5)->create();
        //\App\Models\Destino::factory(1)->create();
        \App\Models\Empresa::factory(10)->create();
        \App\Models\Transporte::factory(10)->create();
        \App\Models\TipoPaquete::factory(2)->create();
        $this->call(RestaurantSeeder::class);
        \App\Models\TipoHabitacion::factory(5)->create();
        \App\Models\TipoMedia::factory(2)->create();
        $this->call(HotelSeeder::class);
        $this->call([
            PermissionTableSeeder::class,
            CreateAdminUserSeeder::class
        ]);
        $this->call(DestinosSeeder::class);
        \App\Models\ComentariosDestino::factory(20)->create();
    }
}
