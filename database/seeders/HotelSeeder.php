<?php

namespace Database\Seeders;

use App\Models\Habitacion;
use App\Models\Hotel;
use App\Models\ImageHabitacionHotel;
use App\Models\TipoHabitacion;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotels = Hotel::factory(5)->create();

        foreach ($hotels as $hotel) {
            $habitaciones = Habitacion::factory(2)->create([
                'hotel_id' => $hotel->id,
                'tipo_habitacion_id' => TipoHabitacion::all()->random()->id,
            ]);

            foreach ($habitaciones as $habitacion) {
                ImageHabitacionHotel::factory(2)->create([
                    'habitacion_id' => $habitacion->id
                ]);
            }
        }
    }
}
