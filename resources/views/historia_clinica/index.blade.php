
@extends('adminlte::page')

@section('title', 'NutriSoft - Editar perfil')

@section('content_header')

@stop

@section('content')
    <h1>Historia Clínica</h1>

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
