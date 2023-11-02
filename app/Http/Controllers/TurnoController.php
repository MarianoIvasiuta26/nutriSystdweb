<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dias_atencion;
use App\Models\Horas_consultas_maniana;
use App\Models\Horas_consultas_tarde;
use App\Models\Tipo_consulta;
use App\Models\Turno;
use Illuminate\Http\Request;

class TurnoController extends Controller
{

    public function showTurnosDisponibles()
    {

        if($dias = Turno::whereIn('estado', [NULL])->pluck('fecha')){
            $diasTurnos = Dias_atencion::all('dia_semana');
            if($horas = Turno::whereIn('estado', [NULL])->pluck('hora')){
                $horasTurnosManiana = Horas_consultas_maniana::all('horas_maniana');
                $horasTurnosTarde = Horas_consultas_tarde::all('horas_tarde');
            }
        }elseif($dias = Turno::whereIn('estado', ['Cancelado'])->pluck('fecha')) {
            $diasTurnos = Dias_atencion::whereIn('dia_semana', $dias)->get();
            if($horas = Turno::whereIn('estado', ['Cancelado'])->pluck('hora')){
                $horasTurnosManiana = Horas_consultas_maniana::whereIn('horas_maniana', $horas)->get();
                $horasTurnosTarde = Horas_consultas_tarde::whereIn('horas_tarde', $horas)->get();
            }
        }

        $turnosDisponibles = [];

        foreach ($diasTurnos as $dia) {
            $horasDisponibles = [];

            foreach ($horasTurnosManiana as $hora) {
                $horasDisponibles[] = $hora->horas_maniana;
            }

            foreach ($horasTurnosTarde as $hora) {
                $horasDisponibles[] = $hora->horas_tarde;
            }

            $turnosDisponibles[] = [
                'dia' => $dia->dia_semana,
                'horas' => $horasDisponibles,
            ];
        }

        $paciente = auth()->user()->nombre;
        $tiposConsulta = Tipo_consulta::all('tipo_consulta');

        return view('turnos.turnos-disponibles', [
            'turnosDisponibles' => $turnosDisponibles,
            'paciente' => $paciente,
            'tiposConsulta' => $tiposConsulta
        ]);
    }


    public function showHorasDisponibles($fecha){
        /*if(Turno::whereIn('fecha', [NULL, $fecha])->whereIn('estado', [NULL,'Cancelado'])->whereNull('hora')->exists()){
            $horasManianaDisponibles = Horas_consultas_maniana::pluck('horas_maniana')->toArray();
            $horasTardeDisponibles = Horas_consultas_tarde::pluck('horas_tarde')->toArray();

            $horasDisponibles = array_merge($horasManianaDisponibles, $horasTardeDisponibles);

            return response()->json($horasDisponibles);

        } else{
            return "No hay horarios disponibles para la fecha seleccionada";
        }*/

        $horasManianaDisponibles = Horas_consultas_maniana::pluck('horas_maniana')->toArray();
        $horasTardeDisponibles = Horas_consultas_tarde::pluck('horas_tarde')->toArray();

        $horasDisponibles = array_merge($horasManianaDisponibles, $horasTardeDisponibles);

        // Verificar si hay turnos para la fecha seleccionada y filtrar las horas disponibles
        $turnosExistentes = Turno::where('fecha', $fecha)->pluck('hora')->toArray();
        $horasDisponibles = array_diff($horasDisponibles, $turnosExistentes);

        if (count($horasDisponibles) > 0) {
            return response()->json($horasDisponibles);
        } else {
            return "No hay horarios disponibles para la fecha seleccionada";
        }
    }

    public function showTurnosPendiente(){
        return view('turnos.turnos-pendientes');
    }

    public function formSolicitudTurno(){
        return view('turnos.solicitud-turno');
    }

    public function solicitarTurno(Request $request){
        $turno = Turno::create($request->validated());

        return redirect(route('login'));
    }

}
