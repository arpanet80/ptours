<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Models\Transporte;
use Illuminate\Support\Facades\DB;

class TransporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportes = Transporte::all();


        return view('admin.transportes.index', compact('transportes'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $empresas = Empresa::all();
        // $options = $empresas->pluck('name', 'id')->toArray();

        $empresas = DB::table('empresas')
            ->where('empresas.status','=', 1)
            ->select(DB::raw('name, id'));
        $empresasOptions = array('' => 'Seleccione una Empresa') + $empresas->pluck('name', 'id')->toArray();
        return view('admin.transportes.create', compact('empresasOptions'));

        /* AYUDA ORIGINAL COMPLETA PARAEL COMBO
        $instructors = DB::table('instructors')
            ->where('instructors.Viewable','=', 1)
            ->select(DB::raw('concat (FirstName," ",LastName) as FullName, id'));
        $instructorOptions = array('' => 'Select Instructor') + $instructors->pluck('FullName', 'id')->toArray();
        */
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
            'name' => 'required|unique:transportes',
            'description' => 'required',
            'price' => 'required|regex:/[0-9]/',
            'quantity' => 'required',
        ]);

        $transporte = Transporte::create($request->all());
        return redirect()->route('admin.transportes.index', $transporte)->with('info', 'El transporte se registro correctamente.');
        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Transporte $transporte)
    {
        return view('admin.transportes.show', compact('transporte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Transporte $transporte)
    {
        return view('admin.transportes.edit', compact('transporte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transporte $transporte)
    {
        $request->validate([
            'name' => "required|unique:transportes,name,$transporte->id",
            'description' => 'required',
            'price' => 'required|regex:/[0-9]/',
            'quantity' => 'required',
        ]);

        $transporte->update($request->all());
        return redirect()->route('admin.transportes.edit', $transporte)->with('info', 'El transporte se actualizo correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transporte $transporte)
    {
        $transporte->delete();
        return redirect()->route('admin.transportes.index', $transporte)->with('info', 'El transporte se elimino correctamente.');
    }
}
