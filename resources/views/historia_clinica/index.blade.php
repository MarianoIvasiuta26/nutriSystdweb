
@extends('adminlte::page')

@section('title', 'NutriSoft - Mi Historia Clínica')

@section('content_header')

@stop

@section('content')
    <h1>Historia Clínica</h1>

    @if (!$hc)
        <h5>¿Todavía no completaste tu Historia Clínica?</h5>
        <p>Complétalo en el siguiente enlace: </p>
        <a href="{{ route('completar-historia-clinica') }}">Completar Historia Clínica</a>

    @endif

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script>
        function solicitarTurno(dia, hora) {
            // Lógica para solicitar el turno para el día y hora seleccionados
            console.log('Solicitar turno para el día: ' + dia + ', hora: ' + hora);
        }
    </script>
@stop
