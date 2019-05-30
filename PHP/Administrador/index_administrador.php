<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']==false){
        header("Location: ../login.php");
    }else if($_SESSION['usu_rol'] == "U"){
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="../../CSS/index1.css">
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
                <h2>Bakery Lovers</h2>
                <p>EL PLACER DE COMER AHORA MÁS CERCA DE TI, VISITA NUESTRAS SUCURSALES</p>
                <p>ADMINISTRADOR</p>
            </div>
        </div>
        <div class="fondo1"></div>
    </div>
</body>
</html>