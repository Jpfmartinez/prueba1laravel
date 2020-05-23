<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $fillable = ['responsable','puesto','departamento','tipoDeContrato'];
}
