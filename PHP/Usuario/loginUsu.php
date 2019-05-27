<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="cabecera">
        <?php
        include("cabecera.php");
        ?>
    </div>
    <div class="contenedor">
        <div class="ancholetras">
            <div class="texto">
                <form action="loginUsu2.php" method="POST">
                    <h2>Login</h2>
                    <input id="correo" type="email" name="correo" placeholder="Correo"  required>
                    <input id="contrasena" type="password" name="contrasena" placeholder="Contrasena"  required>
                    <input type="submit" id="login" name="login" value="Iniciar Sesión" required />
                </form>
            </div>
        </div>
        <div id="fondo1"></div>
    </div>
</body>

</html>
