<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destino;
use App\Models\Media;

class WebTraverController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function destino()
    {
        $destinos = Destino::all();
        //$medias = Media::all();

        /*$destinos = Media::where('mediable_id', 11)->get();
        if ($destinos->isEmpty()) {
            return 'No existe';
        }
        else {
            return $destinos->id;
        }*/

        return view('frontend.destino.destinos', compact('destinos'));

    }

    public function detailedestino($id)
    {
        $destino = Destino::where('id', $id)->first();
//return $destino;
        return view('frontend.destino.detalle-destino', compact('destino'));

    }
}
