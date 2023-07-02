<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('img/fondo-inicio.jpg') }}');
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

    <div class="form-container">
        <h2 class="form-title">Registro de Usuarios</h2>
        <form action="{{ route('validar-registro') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tipo_usuario" class="form-label">Tipo de usuario:</label>
                <div class="radios">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="tipo_usuario_nutri" name="tipo_usuario" value="1" required disabled>
                        <label class="form-check-label" for="tipo_usuario_nutri">Nutricionista</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="tipo_usuario_paciente" name="tipo_usuario" value="2" required checked>
                        <label class="form-check-label" for="tipo_usuario_paciente">Paciente</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="dni" class="form-label">DNI:</label>
                        <input type="text" class="form-control" id="dni" name="dni" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Correo electrónico:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Confirmar contraseña:</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col text-center">
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </div>
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
