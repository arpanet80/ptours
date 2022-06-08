<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurantes = Restaurant::all();
        return view('admin.restaurantes.index', compact('restaurantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.restaurantes.create');
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
            'name' => "required|unique:restaurants,name",
            'address' => 'required',
            'description' => 'required',
        ]);

        $restaurante = Restaurant::create($request->all());
        return redirect()->route('admin.restaurantes.index', $restaurante)->with('info', 'El restaurante se registro correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurante)
    {
        return view('admin.restaurantes.show', compact('restaurante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurante)
    {
        return view('admin.restaurantes.edit', compact('restaurante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurante)
    {
        $request->validate([
            'name' => "required|unique:restaurants,name,$restaurante->id",
            'address' => 'required',
            'description' => 'required',
        ]);

        $restaurante->update($request->all());
        return redirect()->route('admin.restaurantes.edit', $restaurante)->with('info', 'El restaurante se actualizo correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurante)
    {
        $restaurante->delete();
        return redirect()->route('admin.restaurantes.index', $restaurante)->with('info', 'El restaurante se elimino correctamente.');
    }
}
