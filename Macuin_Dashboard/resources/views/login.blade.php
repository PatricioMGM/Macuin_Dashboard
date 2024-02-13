<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .contenedor {
            width: 100%;
            max-width: 800px;
            /* Ajusta el ancho máximo según tus necesidades */
            margin: 0 50px;
            /* 50px de margen a la izquierda y derecha */
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 30px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            margin-bottom: 100px
        }

        label {
            display: block;
            margin-bottom: 8px;
            border-radius: 30px;
        }

        input {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border-radius: 30px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            width: calc(100% - 16px);
            margin-top: 25px;
        }

        button:hover {
            background-color: #0056b3;
        }

        h1 {
            text-align: center;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            clear: both;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="contenedor">
        <header>
            <h1>Macuin Dashboard</h1>
            <img src="images/logo.jpeg" alt="">
        </header>

        <form>
            <h1>Iniciar sesión</h1>
            <label for="usuari">Usuario:</label>
            <input type="text" id="usuari" name="usuari" required>

            <label for="contra">Contraseña:</label>
            <input type="password" id="contra" name="contra" required>

            <center><button type="submit">Iniciar sesión</button></center>
        </form>
    </div>

    <footer>
        &copy; 2024 Macuin Dashboard
    </footer>
</body>

</html>
