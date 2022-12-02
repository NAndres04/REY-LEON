<?php

namespace App\Http\Controllers\Directora\Asistencia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Alumno;
use App\Models\Asistencia;

class AsistenciaController extends Controller
{
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

     public function AsistenciaAlumnoNT1A(Request $request){
        $buscador = $request->get('buscador');
         $asistencias = Asistencia::where('id_curso','=','3')
                            ->where('fecha', 'like','%'.$buscador.'%')
                            ->paginate(10);
        $data = compact('asistencias','buscador');
        return view('directora.asistencia.ver_asistencia_nt1a')->with($data);  
        
    }

    public function AsistenciaAlumnoNT2A(Request $request){
          $buscador = $request->get('buscador');
         $asistencias = Asistencia::where('id_curso','=','4')
                            ->where('fecha', 'like','%'.$buscador.'%')
                            ->paginate(10);
        $data = compact('asistencias','buscador');
        return view('directora.asistencia.ver_asistencia_nt2a')->with($data);  
        
    }

    public function AsistenciaAlumnoNT1B(Request $request){
        $buscador = $request->get('buscador');
         $asistencias = Asistencia::where('id_curso','=','5')
                            ->where('fecha', 'like','%'.$buscador.'%')
                            ->paginate(10);
        $data = compact('asistencias','buscador');
        return view('directora.asistencia.ver_asistencia_nt1b')->with($data);  
        
    }

    public function AsistenciaAlumnoNT2B(Request $request){
         $buscador = $request->get('buscador');
         $asistencias = Asistencia::where('id_curso','=','6')
                            ->where('fecha', 'like','%'.$buscador.'%')
                            ->paginate(10);
        $data = compact('asistencias','buscador');
        return view('directora.asistencia.ver_asistencia_nt2b')->with($data);  
        
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
