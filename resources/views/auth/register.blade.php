<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>

    <form action="{{route('validar-registro')}}" method="POST">

        @csrf
        <div>
            <label for="tipo_usuario">Tipo de usuario:</label>
            <div>
                <input type="radio" id="tipo_usuario_admin" name="tipo_usuario" value="0" required>
                <label for="tipo_usuario_admin">Administrador</label>
            </div>
            <div>
                <input type="radio" id="tipo_usuario_nutri" name="tipo_usuario" value="1" required>
                <label for="tipo_usuario_nutri">Nutricionista</label>
            </div>
            <div>
                <input type="radio" id="tipo_usuario_paciente" name="tipo_usuario" value="2" required>
                <label for="tipo_usuario_paciente">Paciente</label>
            </div>
        </div>
        <div>
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" required>
        </div>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
        </div>
        <div>
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirmar contraseña:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <div>
            <button type="submit">Registrarse</button>
        </div>

    </form>

</body>
</html>
