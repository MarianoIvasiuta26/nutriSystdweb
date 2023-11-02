@extends('adminlte::page')

@section('title', 'NutriSoft - Turnos disponibles')

@section('content_header')

@stop

@section('content')
    <h1>Turnos Disponibles</h1>

    {{--
    @if (count($turnosDisponibles) > 0)
        <div class="table-responsive">
            @foreach ($turnosDisponibles as $turno)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="4">{{ $turno['dia'] }}</th>
                        </tr>
                        <tr>
                            <th>Hora</th>
                            <th>Solicitar Turno</th>
                            <th>Hora</th>
                            <th>Solicitar Turno</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $horas = $turno['horas']; @endphp
                        @for ($i = 0; $i < count($horas); $i += 2)
                            <tr>
                                @for ($j = $i; $j < min($i + 2, count($horas)); $j++)
                                    <td>{{ $horas[$j] }}</td>
                                    <td>
                                        <button class="btn btn-primary" onclick="solicitarTurno('{{ $turno['dia'] }}', '{{ $horas[$j] }}')">Solicitar Turno</button>
                                    </td>
                                @endfor
                            </tr>
                        @endfor
                    </tbody>
                </table>
            @endforeach
        </div>
    @else
        <p>No hay turnos disponibles en este momento.</p>
    @endif

    --}}

    @if (count($turnosDisponibles) > 0)
        <div class="turnos-disp">
                <form action="{{route('turnos-disponibles')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="paciente">Paciente:</label>
                                <input type="text" name="paciente" id="paciente" value="{{ $paciente }}" readonly>
                            </div>

                            <div class="col">
                                <label for="tipo-consulta">Tipo de consulta:</label>
                                <select name="tipo-consulta" id="tipo-consulta">
                                    @foreach ($tiposConsulta as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->tipo_consulta }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="fecha">Fecha:</label>
                                <input type="date" name="fecha" id="fecha" onchange="actualizarHorasDisponibles()">
                            </div>

                            <div class="col">
                                <div id="horasDisp">

                                </div>
                            </div>
                        </div>

                    </div>
                </form>
        </div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>

        .turnos-disp{
            background-color: #212529;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }

        th{
            text-align: center;
        }

        tbody{
            text-align: center;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }
        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }
        .table-sm th,
        .table-sm td {
            padding: 0.3rem;
        }
        .table-bordered {
            border: 1px solid #dee2e6;
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }
        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }
    </style>
@stop

@section('js')
    <script>
        function actualizarHorasDisponibles() {
            const fechaSeleccionada = document.getElementById('fecha').value;

            // Realizar la solicitud AJAX para obtener las horas disponibles
            $.ajax({
                url: `/horas-disponibles/${fechaSeleccionada}`,
                type: 'GET',
                success: function (horasDisponibles) {
                    mostrarHorasDisponibles(horasDisponibles);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        function mostrarHorasDisponibles(horasDisponibles) {
            const horasDiv = document.getElementById('horasDisp');
            horasDiv.innerHTML = '';

            if (Array.isArray(horasDisponibles)) {
                const tituloHoras = document.createElement('h3');
                tituloHoras.textContent = 'Horas Disponibles:';
                horasDiv.appendChild(tituloHoras);

                horasDisponibles.forEach(hora => {
                    const btn = document.createElement('button');
                    btn.textContent = hora;
                    btn.className = 'btn btn-primary';
                    btn.onclick = function() {
                        solicitarTurno(this.textContent);
                    };

                    horasDiv.appendChild(btn);
                });
            } else {
                const tituloHoras = document.createElement('h3');
                tituloHoras.textContent = 'No hay horas disponibles para la fecha seleccionada.';
                horasDiv.appendChild(tituloHoras);
            }
        }

        function solicitarTurno(hora) {
            // Lógica para solicitar el turno para la hora seleccionada
            console.log('Solicitar turno para la hora: ' + hora);
        }
    </script>
@stop
