<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaMundoController extends Controller
{
    public function index()
    {
        $mensaje = '¡Hola Mundo!';
        return view('holaMundo', ['mensaje' => $mensaje]);
    }
}
