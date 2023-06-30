<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesión</title>
</head>
<body>
    <form method="POST" action="{{ route('inicia-sesion') }}">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required autofocus>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Recuérdame</label>
        </div>
        <div>
            <button type="submit">Iniciar sesión</button>
        </div>
    </form>
</body>
</html>
