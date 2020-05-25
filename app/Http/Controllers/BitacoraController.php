<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BitacoraModel;

class BitacoraController extends Controller
{
	public function index()
	{
		$activoBi = BitacoraModel::get();
    	return view('Bitacora.index', compact('activoBi'));
	}

}
