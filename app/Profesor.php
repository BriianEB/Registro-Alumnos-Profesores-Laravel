<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores';
    protected $primaryKey = 'no_empleado';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'no_empleado', 'nombre', 'carrera', 'telefono'
    ];


    public function getRouteKeyName()
    {
        return 'no_empleado';
    }
}
