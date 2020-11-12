<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
    protected $primaryKey = 'matricula';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'matricula', 'nombre', 'carrera', 'email', 'telefono'
    ];
    

    public function getRouteKeyName()
    {
        return 'matricula';
    }
}
