<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/login.css">
</head>

<body>
    <div class="contenedor">
        <header>
            <h1>Macuin Dashboard</h1>
            <img src="images/logo.jpeg" alt="Logo">
        </header>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <h1>Iniciar sesión</h1>
            <label for="email">Usuario:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror

        
            <center><button type="submit">Iniciar sesión</button></center>
        </form>        
    </div>
</body>

</html>
