<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActivoFijoModel;
class ActivoFijoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $activo = ActivoFijoModel::get();
        return view('mostrar', compact('activo'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        ActivoFijoModel::create([
            'numInventario' => request('numInventario'),
            'tipo'=>request('tipo'),
            'descripcion'=>request('descripcion'),
            'numSerie'=>request('numSerie'),
            'resguardo'=>request('resguardo'),
            'valorAdqui'=>request('valorAdquisitivo'),
            'verificado'=>request('verificado'),
            'numTrabajador'=>request('numTrabajador')
        ]);

        return redirect()->route('mostrar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return ActivoFijoModel::find($id);

    /*  return view('editar', [
      'numTrabajador' => ActivoFijoModel::find($id)
    ]);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ActivoFijoModel $id)
    {
        //
        return view('editar', [
         'activo' => $id
       ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActivoFijoModel $id)
    {
        $id->update([
          'numInventario' => request('numInventario'),
          'tipo'=>request('tipo'),
          'descripcion'=>request('descripcion'),
          'numSerie'=>request('numSerie'),
          'resguardo'=>request('resguardo'),
          'valorAdqui'=>request('valorAdquisitivo'),
          'verificado'=>request('verificado'),
          'numTrabajador'=>request('numTrabajador'),
        ]);
        return redirect()->route('mostrar');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
