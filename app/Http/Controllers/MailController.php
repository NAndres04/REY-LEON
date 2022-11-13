<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Mail\TestMail;
use App\Models\Alumno;
use App\Models\Apoderado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
     public $destinatarios = [];
     public $destinatario;
     public function __construct()
     {
         $this->middleware('auth');
         $this->middleware('AuthDirectora', ['only' => 'index']);
     }

    //escoger cursos
    public function escoger(){
        $cursos = Curso::all();
        return view('directora.correo.crearcorreo', compact('cursos'));
    }
    
     //redirige a vista
    public function index(){
       
        return view('directora.correo.enviarcorreo');
    }
    //procesa el formulario y envia el correo
    public function store(Request $request){
      //  $curso = Curso::find($request);
       // $alumnos =Alumno::where('id_curso',$curso->id)->get();
       
       // $apoderado=Apoderado::where('id',$alumnos->id_apoderado)->get();
     //   var_dump($apoderado);
        $request->validate([
            'titulo' => 'required',
            'asunto' => 'required',
            'mensaje' => 'required',
        ]);
         // para crear el correo
        //foreach($this->destinatarios as $destinatario ){
            // $apoderados = Apoderado::all();
            $correo = new TestMail($request->all(),$request->asunto);
            Mail::to(auth()->user()->email)->send($correo);
            //Rescatar apoderado
            // foreach($apoderados as $apoderado =>$valor){
            //     Mail::to($valor->correo)->send($correo);

            // }
          
          //  Mail::to($apoderado->correo)->send($correo);
       // }
    
        return redirect()->route('enviarcorreo.index')->with('info','Mensaje enviado');
    }
}
