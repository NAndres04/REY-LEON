<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'rut_apoderado',
        'id_curso',
        'rut',
        'nro_documento',
        'nombre',
        'ap_paterno',
        'ap_materno',
        'fecha_nac',
        'ciudad_nac',
        'nacionalidad',
        'domicilio',
        'edad',
        'nombre_emergencia',
        'fono_emergencia',
        'discapacidad',
        'matricula',
    ];

    public function cursos(){
        return $this->belongsTo('App/Curso');
    }

    public function apoderados(){
        return $this->belongsTo('App/Apoderado');
    }
}
