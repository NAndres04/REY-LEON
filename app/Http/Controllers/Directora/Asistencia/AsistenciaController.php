<?php

namespace App\Http\Controllers\Directora\Asistencia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Alumno;

class AsistenciaController extends Controller
{
    public function AlumnoNT1A(){
        $alumnos = Alumno::where('id_curso', '3')->get();
        return view('directora.asistencia.asistencia_alumnos_nt1a', compact('alumnos'));
        
    }

    public function AlumnoNT2A(){
        $alumnos = Alumno::where('id_curso', '4')->get();
        return view('directora.asistencia.asistencia_alumnos_nt2a', compact('alumnos'));
        
    }

    public function AlumnoNT1B(){
        $alumnos = Alumno::where('id_curso', '5')->get();
        return view('directora.asistencia.asistencia_alumnos_nt1b', compact('alumnos'));
        
    }

    public function AlumnoNT2B(){
        $alumnos = Alumno::where('id_curso', '6')->get();
        return view('directora.asistencia.asistencia_alumnos_nt2b', compact('alumnos'));
        
    }

}
