<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducadoraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('AuthEducadora', ['only' => 'index']);

    }

    public function index()
    {
        return view('educadora.educadora');
    }
}
