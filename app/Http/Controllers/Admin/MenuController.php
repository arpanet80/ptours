<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RestaurantMenu;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = RestaurantMenu::all();
        return view('admin.menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = DB::table('restaurants')
            ->where('status','=', 1)
            ->select(DB::raw('name, id'));
        $menusOptions = array('' => 'Seleccione un Restaurante') + $menus->pluck('name', 'id')->toArray();
        return view('admin.menus.create', compact('menusOptions'));

        ///return view('admin.menus.create');
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
            'name' => 'required|unique:restaurant_menus',
            'description' => 'required',
            'ingredients' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
        $menu = RestaurantMenu::create($request->all());
        //return redirect()->route('admin.menus.index', $menu)->with('info', 'El platillo se registro correctamente.');

        //$id_menu = $menu->id;
        //return redirect()->route('admin.imagemenus.create', compact('id_menu'))->with('info', 'El platillo se registro correctamente.');

         return redirect()->route('admin.imagemenus.create')->with('id', $menu->id)
                                                            ->with('info', 'El platillo se registro correctamente: Cargue las imagenes correspondientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RestaurantMenu $menu)
    {
        return view('admin.menus.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RestaurantMenu $menu)
    {
        return view('admin.menus.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RestaurantMenu $menu)
    {
        $request->validate([
            'name' => "required|unique:restaurant_menus,name,$menu->id",
            'description' => 'required',
            'ingredients' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        $menu->update($request->all());
        return redirect()->route('admin.menus.edit', $menu)->with('info', 'El menu se actualizo correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RestaurantMenu $menu)
    {
        $menu->delete();
        return redirect()->route('admin.menus.index', $menu)->with('info', 'El menu se elimino correctamente.');
    }
}
