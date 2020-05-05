<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activofijomodel extends Model
{
    protected $table='activofijo';
    protected $fillable = ['numInventario', 'tipo', 'descripcion','numSerie','resguardo','valorAdqui','verificado','numTrabajador'];
}
