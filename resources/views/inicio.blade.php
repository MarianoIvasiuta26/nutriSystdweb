<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de Inicio</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('img/fondo-inicio.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: right;
            align-items: right;
            position: relative;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .titulo {
            position: absolute;
            top: 10%;
            left: 75%;
            transform: translate(-50%, -50%);
            font-size: 50px;
            color: white;
            text-align: center;
            width: 500px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            background-color: rgba(65, 59, 59, 0.25); /* Color de fondo con transparencia */
            backdrop-filter: blur(10px); /* Efecto de desenfoque */
            border-radius: 10px; /* Borde redondeado */
            padding: 20px; /* Espacio interno */
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 50%; /* Ajuste para separar los botones del texto */
            margin-right: 90%
        }

        .button {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column; /* Ajuste para colocar el texto debajo del botón */
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.8);
            margin: 0 10px;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        .button:hover {
            background-color: #45a049;
            transform: scale(1.1);
        }

        .register-button {
            background-color: #5fceb2;
        }

        .login-button {
            background-color: #f48b36;
        }

        .button img {
            width: 60px;
            height: 60px;
        }

        .button span {
            margin-top: 10px; /* Ajuste para separar el texto del botón */
            font-size: 18px; /* Ajuste para el tamaño del texto dentro de los botones */
            color: rgba(0, 0, 0, 0.8);
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="titulo">NutriSoft</div>

    <div class="button-container">
        <a href="{{route('registro')}}" class="button register-button">
            <img src="{{asset('img/plan.png')}}" alt="Registro">
            <span>Registrarse</span>
        </a>

        <a href="{{route('login')}}" class="button login-button">
            <img src="{{asset('img/salud.png')}}" alt="Login">
            <span>Iniciar sesión</span>
        </a>
    </div>



</div>
</body>
</html>



