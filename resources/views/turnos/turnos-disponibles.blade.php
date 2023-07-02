@extends('adminlte::page')

@section('title', 'NutriSoft - Turnos disponibles')

@section('content_header')

@stop

@section('content')
    <h1>Turnos Disponibles</h1>

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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
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
        function solicitarTurno(dia, hora) {
            // Lógica para solicitar el turno para el día y hora seleccionados
            console.log('Solicitar turno para el día: ' + dia + ', hora: ' + hora);
        }
    </script>
@stop
