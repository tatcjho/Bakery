<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../../CSS/login.css">

</head>

<body>
    <div class="cabecera">
        <?php
        include("cabecera.php");
        ?>

    </div>


    <div class="contenedor">
        <form action="../Empresa/Controladores/loginEmp2.php" method="POST">
            <h2>Login</h2>
            <input id="correo" type="email" name="correo" placeholder="correo"  required>
            <input id="contrasena" type="password" name="contrasena" placeholder="contrasena"  required>

            <input type="submit" id="login" name="login" value="Iniciar Sesión" required />
        </form>

    </div>


</body>

</html>