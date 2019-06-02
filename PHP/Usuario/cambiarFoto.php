<?php
session_start();
if (!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] == false) {
    header("Location: ../login.php");
} else if ($_SESSION['usu_rol'] == "A") {
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
    <link rel="stylesheet" href="../../CSS/modificar.css">
    
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
            <li><a href="editarContrasena.php">Cambiar Contraseña</a></li>
            <li><a href=""  class="active">Cambiar Imagen</a></li>
            <li><a href="#contact" class="eliminar">Eliminar Cuenta</a></li>
        </ul>
    </div>
    <div id="derecha">
        <div id="contenedor">
            <form id="formulario01" method="post" action="Controladores/cambiar_foto.php" enctype="multipart/form-data">
            <div id="imagen">
            <img src="../../images/usuario/<?php echo ($_SESSION["usu_imagen"]) ?>" alt=""  width="200" height="200"> 
            <br>
            <input type="file" id="img" name="img"/>    
            </div>
            <br>
            <input type="submit" id="submit" name="modificar" value="Actualizar Imagen" />
            <input type="reset" id="cancelar" name="cancelar" value="Cancelar"  />
            </form>
        </div>
    </div>
</body>
</html>