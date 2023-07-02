<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Historia_clinica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoriaClinicaController extends Controller
{

    public function comprobarHC(){
        $user = Auth::user();
        $hc = Historia_clinica::where('users_id', $user->id)->first();

        if ($hc) {
            return view('dashboard', ['hc' => $hc]);
        } else {
            $hc = null;
            return view('dashboard', ['hc' => $hc]);
        }

    }
    public function validar_HC(){

    }
}
