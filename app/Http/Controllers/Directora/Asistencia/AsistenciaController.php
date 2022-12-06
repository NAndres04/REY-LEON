<?php

namespace App\Http\Controllers\Directora\Asistencia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Asistencia;

class AsistenciaController extends Controller
{
    public function index(){
        $cursos = Curso::all();
        return view('directora.asistencia.ver_cursos_asistencia', compact('cursos')); 
    }

    public function realizarAsistencia($id_curso){
        $alumnos = Alumno::where('id_curso', $id_curso)->paginate(10);
        return view('directora.asistencia.realizar_asistencia', compact('alumnos'));
     }


    public function AlumnoNT1A(){
        $alumnos = Alumno::where('id_curso', '3')->paginate(10);
        return view('directora.asistencia.asistencia_alumnos_nt1a', compact('alumnos'));
        
    }

    public function AlumnoNT2A(){
        $alumnos = Alumno::where('id_curso', '4')->paginate(10);
        return view('directora.asistencia.asistencia_alumnos_nt2a', compact('alumnos'));
        
    }

    public function AlumnoNT1B(){
        $alumnos = Alumno::where('id_curso', '5')->paginate(10);
        return view('directora.asistencia.asistencia_alumnos_nt1b', compact('alumnos'));
        
    }

    public function AlumnoNT2B(){
        $alumnos = Alumno::where('id_curso', '6')->paginate(10);
        return view('directora.asistencia.asistencia_alumnos_nt2b', compact('alumnos'));
        
    }

     public function AsistenciaAlumnos(Request $request, $curso_id){
         $buscador = $request->get('buscador');
         $asistencias = Asistencia::where('id_curso','=', $curso_id)
                            ->where('fecha', 'like','%'.$buscador.'%')
                            ->paginate(10);
        $data = compact('asistencias','buscador');
        return view('directora.asistencia.ver_asistencia')->with($data); 
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
