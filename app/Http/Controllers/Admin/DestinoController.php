<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destino;
use App\Models\Habitacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //return view('profile.update-profile-information-form');
        //$user = auth()->user()->roles->pluck('name')[0] ?? '';
        //return $user;
        $destinos = Destino::where('status', 1)
                                ->orderBy('id')
                                //->take(10)
                                ->get();
        return view('admin.destinos.index', compact('destinos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destinos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return auth()->user()->id;
        //return $request;

        $request->validate([
            'title' => "required|unique:destinos,title",
            'description_short' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'languaje' => 'required',
            'itinerary' => 'required',
            'startplace' => 'required',
            'endplace' => 'required',
        ]);

        $destino = Destino::create($request->all());
        return redirect()->route('admin.destinos.index', $destino)->with('info', 'El destino se registro correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Destino $destino)
    {
        return view('admin.destinos.show', compact('destino'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Destino $destino)
    {
        return view('admin.destinos.edit', compact('destino'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destino $destino)
    {
        $request->validate([
            'title' => "required|unique:destinos,title,$destino->id",
            'description_short' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'languaje' => 'required',
            'itinerary' => 'required',
            'startplace' => 'required',
            'endplace' => 'required',
        ]);


        $destino->update($request->all());
        return redirect()->route('admin.destinos.edit', $destino)->with('info', 'El destino se actualizo correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destino $destino)
    {
        $destino->delete();
        return redirect()->route('admin.destinos.index', $destino)->with('info', 'El destino se elimino correctamente.');
    }
}
