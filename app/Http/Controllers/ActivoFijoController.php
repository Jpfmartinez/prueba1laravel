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

       /* return request(['numInventario', 'tipo', 'descripcion','numSerie','resguardo', 'valorAdquisitivo', 'verificado', 'numTrabajador']);*/

        return ActivoFijoModel::create([
            'numInventario' => request('numInventario'),
            'tipo'=>request('tipo'),
            'descripcion'=>request('descripcion'),
            'numSerie'=>request('numSerie'),
            'resguardo'=>request('resguardo'),
            'valorAdqui'=>request('valorAdquisitivo'),
            'verificado'=>request('verificado'),
            'numTrabajador'=>request('numTrabajador')
        ]);
        /*return ActivoFijoModel::create([
            'numInventario' -> request('numInventario'),

            'tipo'->request('tipo'),

            'descripcion' -> request('descripcion'),

            'numSerie' -> request('numSerie'),

            'resguardo' -> request('resguardo'),

            'valorAdqui' -> request('valorAdquisitivo',

            'verificado' -> request('verificado'),

            'numTrabajador' -> request('numTrabajador'),
        ]);*/
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
