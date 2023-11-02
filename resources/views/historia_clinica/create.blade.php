@extends('adminlte::page')

@section('title', 'NutriSoft - Turnos disponibles')

@section('content_header')

@stop

@section('content')
<div class="form-container">
    <h2 class="form-title">Completar Historia Clínica</h2>
    <form action="{{ route('validar-HC') }}" method="POST">
        @csrf

        <!-- Sección 1 -->
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="sexo" class="form-label">Sexo:</label>
                    <div class="radios">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="sexo_fem" name="sexo" value="1" required>
                            <label class="form-check-label" for="sexo_fem">Femenino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="sexo_masc" name="sexo" value="2" required>
                            <label class="form-check-label" for="sexo_masc">Masculino</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="fecha_nac" class="form-label">Fecha Nacimiento:</label>
                    <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="edad" class="form-label">Edad:</label>
                    <input type="number" class="form-control" id="edad" name="edad" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="altura" class="form-label">Altura:</label>
                    <input type="number" class="form-control" id="altura" name="altura" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="peso" class="form-label">Peso:</label>
                    <input type="number" class="form-control" id="peso" name="peso" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="t_cocina" class="form-label">Tiempo disponible para cocinar:</label>
                    <input type="number" class="form-control" id="t_cocina" name="t_cocina" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="c_cocina" class="form-label">Cantidad de personas a cocinar:</label>
                    <input type="number" class="form-control" id="c_cocina" name="c_cocina" required>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col text-center">
                <button id="siguiente" onclick="irASiguiente()" type="button" class="btn btn-danger">
                    <a href=""></a>
                    Cancelar
                </button>
            </div>
            <div class="col text-center">
                <button id="cancelar" onclick="volver()" type="submit" class="btn btn-primary">Siguiente</button>
            </div>
        </div>

        <!-- Sección 2 -->
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="dias_adelantamiento" class="form-label">Días adelantamiento:</label>

                    <select name="dias_adelantamiento" id="dias_adelantamiento">
                        @foreach ($dias as $dia)
                            <option value="{{ $dia['dia'] }}">{{ $dia['dia'] }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="horas_adelantamiento" class="form-label">Horas Adelantamiento:</label>
                    <div class="horas">
                        <select name="horas_adelantamiento" id="horas_adelantamiento">
                            @foreach ($horas as $hora)
                                <option value="{{ $hora['hora'] }}">{{ $hora['hora'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="fecha_nac" class="form-label">Fecha Nacimiento:</label>
                    <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" required>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col text-center">
                <button id="volver" onclick="volverAtras()" type="button" class="btn btn-danger">
                    Volver
                </button>
            </div>
            <div class="col text-center">
                <button id="siguiente2" onclick="irASiguiente()" type="submit" class="btn btn-primary">
                    Siguiente
                </button>
            </div>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .form-container {
            width: 70%;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }

        .form-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .submit-btn {
            text-align: center;
        }
    </style>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function irASiguiente() {
            // Redirige al usuario a otro apartado del formulario
            window.location.href = 'formulario-parte2';
        }

        function volverAtras() {
            // Redirige al usuario a la sección anterior del formulario
            window.history.back();
        }
    </script>
@stop
