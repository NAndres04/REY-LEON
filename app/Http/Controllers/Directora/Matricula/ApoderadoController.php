<?php

namespace App\Http\Controllers\Directora\Matricula;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Apoderado;
use App\Models\Curso;


class ApoderadoController extends Controller
{
    public function index(Request $request){
        $buscador = $request['buscador'] ?? "";
        if($buscador != ""){
            $apoderados = Apoderado::where('rut', 'LIKE', "%$buscador%")
                                    ->orwhere('nombre', 'LIKE', "%$buscador%")
                                    ->paginate(10);
        } else {
            $apoderados = Apoderado::paginate(10);
        }
        $data = compact('apoderados','buscador');
        return view('directora.matricula.matricula_buscar_apoderado')->with($data);
    }

    public function apoderadoseleccionado(Apoderado $apoderados){
        $cursos = Curso::all();
        return view('directora.matricula.matricula_apoderado_existente', compact('apoderados','cursos'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'rut' => 'required|cl_rut|unique:apoderados|unique:alumnos',
            'nombre' => 'required|max:30|min:3',
            'ap_paterno' => 'required|max:10|min:3',
            'ap_materno' => 'required|max:10|min:3',
            'fono' => 'required|max:9|min:8',
            'correo' => 'required|max:60|unique:apoderados|email',
            'situacion_laboral' => 'required|in:Trabajador Dependiente,Trabajador Independiente,Cesante',
            'tipo_salud' => 'required|in:Fonasa,Isapre,No Aplica',

      ] );

        $apoderado = Apoderado::create([
            'rut' => $request->rut,
            'nombre' => $request->nombre,
            'ap_paterno' => $request->ap_paterno,
            'ap_materno' => $request->ap_materno,
            'fono' => $request->fono,
            'correo' => $request->correo,
            'situacion_laboral' => $request->situacion_laboral,
            'tipo_salud' => $request->tipo_salud,
        ]);
        return view('directora.matricula.matricula_apoderado_confirmar');
    }
}
