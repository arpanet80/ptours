<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\Paquete;

class Paquetes extends Component
{
    public function render()
    {
        $paquetes = Paquete::paginate(2);
        return view('livewire.home.paquetes', compact('paquetes'));
    }
}
