<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_apoderado',
        'id_curso',
        'rut',
        'nombre',
        'ap_paterno',
        'ap_materno',
        'fecha_nac',
        'nacionalidad',
        'domicilio',
        'edad',
        'nombre_emergencia',
        'fono_emergencia',
        'matricula',
    ];

    public function cursos(){
        return $this->belongsTo(Curso::class, 'id_curso');
    }

    public function apoderados(){
        return $this->belongsTo(Apoderado::class, 'id_apoderado');
    }

}
