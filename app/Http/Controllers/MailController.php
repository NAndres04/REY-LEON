<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    //redirige a vista
    public function index(){
        return view('directora.correo.enviarcorreo');
    }
    //procesa el formulario y envia el correo
    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'asunto' => 'required',
            'mensaje' => 'required',
        ]);

        $correo = new TestMail($request->all());
        Mail::to('jeancariel28@gmail.com')->send($correo);
    
        return redirect()->route('enviarcorreo.index')->with('info','Mensaje enviado');
    }
}
