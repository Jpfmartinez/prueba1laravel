<?php

namespace App\Http\Controllers;

use App\Depreciation;
use Illuminate\Http\Request;

class depreciationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $depreciations = Depreciation::latest()->paginate(5);

      return view('depreciations.index',compact('depreciations'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('depreciations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Depreciation::create($request->all());

      return redirect()->route('depreciations.index')
                     ->with('success','depreciaiones created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Depreciation  $depreciation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $depreciation = Depreciation::find($id);
      return view('depreciations.show',compact('depreciation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Depreciation  $depreciation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $depreciation = Depreciation::find($id);
      return view('depreciations.edit',compact('depreciation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Depreciation  $depreciation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $depreciations = Depreciation::find($id);

      $depreciations->id_activofijo = $request->get('id_activofijo');
      $depreciations->tipo = $request->get('tipo');
      $depreciations->descripcion = $request->get('descripcion');
      $depreciations->montoOriginal = $request->get('montoOriginal');
      $depreciations->vidaUtil = $request->get('vidaUtil');
      $depreciations->porcenjate = $request->get('porcenjate');
      $depreciations->total = $request->get('total');
      $depreciations->porDepreciar = $request->get('porDepreciar');
      $depreciations->depreciacionAc = $request->get('depreciacionAc');
      $depreciations->save();

      return redirect()->route('depreciations.index')
            ->with('success','depreciaiones update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Depreciation  $depreciation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $depreciations = Depreciation::find($id);
      $depreciations->delete();
        return redirect()->route('depreciations.index')
              ->with('success','depreciations deleted successfully');
    }
}
