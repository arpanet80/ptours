<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Habitacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitacions = Habitacion::where('status', 1)
                                ->orderBy('id')
                                //->take(10)
                                ->get();
        return view('admin.habitacions.index', compact('habitacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotel = DB::table('hotels')
            ->where('hotels.status','=', 1)
            ->select(DB::raw('name, id'));
        $hotelOptions = array('' => 'Seleccione un hotel') + $hotel->pluck('name', 'id')->toArray();

        $tipoHab = DB::table('tipo_habitacions')->select(DB::raw('name, id'));
        $tipoHabOptions = array('' => 'Seleccione un tipo') + $tipoHab->pluck('name', 'id')->toArray();

        //return view('admin.habitacions.create', compact('tipoHabOptions'));
        return view('admin.habitacions.create', compact('tipoHabOptions','hotelOptions'));
        //return redirect()->route('admin.habitacions.index', $hotelOptions)->with('tipoHabOptions');

        //return view('admin.habitacions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => "required",
            'price' => 'required',
            'quantity' => 'required',
        ]);

        $habitacion = Habitacion::create($request->all());
        return redirect()->route('admin.habitacions.index', $habitacion)->with('info', 'La habitacion se registro correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Habitacion $habitacion)
    {
        return view('admin.habitacions.show', compact('habitacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Habitacion $habitacion)
    {
        return view('admin.habitacions.edit', compact('habitacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habitacion $habitacion)
    {
        $request->validate([
            'name' => "required|unique:habitacions,name,$habitacion->id",
            'address' => 'required',
            'description' => 'required',
        ]);

        $habitacion->update($request->all());
        return redirect()->route('admin.habitacions.edit', $habitacion)->with('info', 'La habitacion se actualizo correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habitacion $habitacion)
    {
        $habitacion->delete();
        return redirect()->route('admin.habitacions.index', $habitacion)->with('info', 'La habitacion se elimino correctamente.');
    }
}
