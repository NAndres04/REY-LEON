<?php

namespace App\Http\Controllers\Directora\Asistencia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Alumno;
use App\Models\Asistencia;

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

    public function store(Request $request){
        foreach($request->estado as $key => $value){
       Asistencia::create([
           'id_user' => auth()->user()->id,
           'id_curso' => $request->id_curso,
           'fecha' => $request->fecha,
           'id_alumno' => $request['id_alumno'][$key], 
           'estado' => $value, 
       ]);
   }
       return view('directora.directora');
   }

}
