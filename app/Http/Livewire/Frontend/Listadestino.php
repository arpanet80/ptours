<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Destino;

class Listadestino extends Component
{
    use WithPagination;
    public $perPage = 27;

    public function render()
    {
        //$destinos = Destino::latest()->take(9)->get();
        $destinos = Destino::paginate($this->perPage);
        return view('livewire.frontend.listadestino', compact('destinos'));
    }
}
