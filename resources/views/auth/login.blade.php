<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesión</title>
</head>
<body>
    <form method="POST" action="{{ route('validar-login') }}">
        @csrf

        <div>
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" id="email" required autofocus>
        </div>

        <div>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Recordarme</label>
        </div>

        <div>
            <button type="submit">Iniciar sesión</button>
        </div>



    </form>
</body>
</html>

