<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']==false){
        header("Location: ../login.php");
    }else if($_SESSION['usu_rol'] == "U"){
        header("Location: ../index.php");
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inicio-Usuario</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/admin.css">
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/buscarUsuarios.js"></script>
</head>
<body>
    <div class="cabecera">
        <?php
        include("cabecera.php");
        ?>
    </div>
    <div id="contenedor">
        <div id="tituloIndex">
            <h1>Listado de Usuarios</h1>
        </div>
        <div id="buscador"> 
            <h4>Busqueda de usuarios</h4>
            <input type="text" name="busqueda" id="busqueda" placeholder="Buscar.."/>
        </div>        
        <section id="datos"></section>       
    </div>
</body>
</html>