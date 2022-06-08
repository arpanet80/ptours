<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImageMenuRestaurant;
use Illuminate\Support\Facades\Storage;

class ImageMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.imagemenus.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.imagemenus.create');
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
            'file'=> 'required|image|max:2048',
        ]);
        $imagenes = $request->file('file')->store('public/menu-restaurants');
        $url = Storage::url($imagenes);
        ImageMenuRestaurant::create([
            'restaurant_menu_id' => $request['id'],
            'url' => $url
        ]);

        //return redirect()->route('admin.imagemenus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showImageMenu(ImageMenuRestaurant $imagemenu)
    {
        return view('admin.imagemenus.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editImageMenu(ImageMenuRestaurant $imagemenu)
    {
        return view('admin.imagemenus.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ImageMenuRestaurant $imagemenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyImageMenu(ImageMenuRestaurant $imagemenu)
    {
        //
    }
}
