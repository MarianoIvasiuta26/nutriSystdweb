<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HC\Dias_adelantamiento;
use Illuminate\Http\Request;

class DiaController extends Controller
{
    public function showDia(){
        $d = Dias_adelantamiento::all('dias');
        $dias = [];

        foreach ($d as $dia) {
            $dias[] = [
                'dia' => $dia->dias,
            ];
        }

        return view('historia_clinica.create', ['dias' => $dias]);
    }
}
