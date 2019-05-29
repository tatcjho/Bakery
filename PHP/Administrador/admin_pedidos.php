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
    <title>Gestión de usuarios</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/admin.css">
</head>
<body>
     <div class="cabecera">
        <?php
        include("cabecera.php");
        ?>
    </div>
</body>
</html>