<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']==false){
        header("Location: ../login.php");
    }else if($_SESSION['usu_rol'] == "A"){
        header("Location: ../Administrador/index_administrador.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="../../CSS/editarPerfil.css">
</head>
<body>
    <div class="cabecera">
        <?php
        include("cabecera.php");
        ?>
    </div>
    <div id="navIzq">
        <ul>
            <li><a href="editarPerfil.php">Modificar Cuenta</a></li>
            <li><a href="editarContrasena.php" class="active">Modificar Contraseña</a></li>
            <li><a href="#contact" class="eliminar">Eliminar Cuenta</a></li>
        </ul>
    </div>
    <div id="derecha">
        <span id="titulo">Modificacion de Contraseña</span>
        <?php
            $codigo=$_SESSION['usu_codigo'];
        ?>
        <div id="contenedor">
            <form id="formulario01" method="post" action="Controladores/cambiarContrasena.php">
                <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>"/>
                <label for="contrasena" id="label1">Constraseña actual</label>
                <input type="password" id="contrasena1" name="contrasena1" value="" required placeholder="Ingrese su contraseña actual">
                <br>
                <label for="contrasena" id="label1">Constraseña nueva</label>
                <input type="password" id="contrasena2" name="contrasena2" value="" required placeholder="Ingresar contraseña nueva">
                <br>
                <input type="submit" id="submit" name="modificar" value="Modificar" />
                <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
            </form>
        </div>
    </div>
</body>
</html>