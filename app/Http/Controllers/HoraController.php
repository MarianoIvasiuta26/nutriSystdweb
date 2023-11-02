<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HC\Horas_adelantamiento;
use Illuminate\Http\Request;

class HoraController extends Controller
{
    public function showHora(){
        $h = Horas_adelantamiento::all('horas');
        $horas = [];

        foreach ($h as $hora) {
            $horas[] = [
                'dia' => $hora->horas,
            ];
        }

        return view('historia_clinica.create', ['horas' => $horas]);
    }
}
