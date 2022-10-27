<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('AuthDirectora', ['only' => 'index']);

    }

    public function index()
    {
        return view('directora.directora');
    }
}
