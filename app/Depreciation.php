<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depreciation extends Model
{
  protected $fillable = [
    'id_activofijo',
    'tipo',
    'descripcion',
    'montoOriginal',
    'vidaUtil',
    'porcenjate',
    'total',
    'porDepreciar',
    'depreciacionAc'
  ];

  public function activo()
  {
      return $this-> belongsTo(ActivoFijoModel::class,'id_activofijo');
  }

}
