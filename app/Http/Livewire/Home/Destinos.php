<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\Destino;

class Destinos extends Component
{
    public function render()
    {
        //$destinos = Destino::paginate(2);
        $destinos = Destino::latest()->take(9)->get();
        return view('livewire.home.destinos', compact('destinos'));
    }
}
