<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{
    public function showForm(){
        return view('contacto');
    }

    public function contacto(Request $request)
    {
        $nombre = $request->input('nombre');
        $telefono = $request->input('telefono');
        $direccion = $request->input('direccion');

        return view('contacto', [
            'nombre' => $nombre,
            'telefono' => $telefono,
            'direccion' => $direccion
        ]);
    }
}
