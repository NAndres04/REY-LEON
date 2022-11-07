<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apoderado extends Model
{
    use HasFactory;

    protected $fillable = [
        'rut',
        'nombre',
        'ap_paterno',
        'ap_materno',
        'fono',
        'correo',
        'profesion_laboral',
        'situacion_laboral',
        'grado_estudio',
        'tipo_salud',
    ];

}
