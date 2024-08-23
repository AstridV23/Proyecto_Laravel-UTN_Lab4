<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class promedioController extends Controller
{
    public function showForm(){
        return view('promedio');
    }

    public function promedio(Request $request)
    {
        $operation = $request->input('operation');
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');
        $number3 = $request->input('number3');
        $suma = 0;
        $result = 0;

        $suma = $number1 + $number2 + $number3;
        $result = $suma/3;

        return view('promedio', ['promedio' => $result]);
    }

}
