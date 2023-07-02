@extends('adminlte::page')

@section('title', 'NutriSoft - Inicio')

@section('content_header')
    <h1>NutriSoft - Sistema de Gestión nutricional</h1>
    <br>
    <br>
    <br>
    
@stop

@section('content')
    <p>Bienvenido a NutriSoft, un sistema de gestión nutricional</p>

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
    <script> console.log('Hi!'); </script>
@stop
