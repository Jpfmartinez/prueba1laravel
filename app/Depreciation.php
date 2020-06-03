<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depreciation extends Model
{
  protected $fillable = [
    'noInventario',
    'tipo',
    'descripcion',
    'montoOriginal',
    'vidaUtil',
    'porcenjate',
    'total',
    'porDepreciar',
    'depreciacionAc'
  ];
}
