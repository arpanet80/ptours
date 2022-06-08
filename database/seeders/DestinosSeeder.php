<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destino;
use App\Models\Media;

class DestinosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $destinos = Destino::factory(20)->create();

        foreach ($destinos as $destino) {
            Media::factory(2)->create([
                'mediable_id' => $destino->id,
                'mediable_type' => Destino::class,
            ]);
        }
    }
}
