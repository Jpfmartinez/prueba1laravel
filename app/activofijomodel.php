<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivoFijoModel extends Model
{
  	protected $table='activofijo';
	protected $fillable = ['tipo', 'descripcion','numSerie','resguardo','valorAdqui','verificado','id_trabajador'];


  public function trabajador()
  {
      return $this-> belongsTo(Trabajador::class,'id_trabajador');
  }

  public function depre()
  {
      return $this-> belongsTo(Depreciation::class,'id_activofijo');
  }

}
