<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../../CSS/index.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div class="menu_bar">
            <a href="#" class="bt-menu"><img src="https://img.icons8.com/nolan/64/000000/menu.png"></a>
            <div class="m">
                <p>Menú</p>
            </div>
        </div>
        <div class="logo">
            <p><a href="index_administrador.php"><img src="../../images/logo/oe1.png" alt="logo" id="logoP" /></a></p>
        </div>
        <nav>
            <ul>
                <li><a href="index_administrador.php">Inicio</a></li>
                <li><a href="#">Usuarios</a></li>
                <li><a href="agregar_producto.php"s>Pedidos</a></li>
                <li class="submenu">
                    <a href="#">Productos<span class="fa fa-caret-down"></span></a>
                    <ul class="children">
                        <li><a href="panes.php">Panes</a></li>
                        <li><a href="cookies.php">Galletas</a></li>
                        <li><a href="cake.php">Tortas </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><?php echo $_SESSION['usu_nombres'] ?><span class="fa fa-caret-down"></span></a>
                    <ul class="children">
                        <li><a href="../Conexion/logout.php">Cerrar Sesion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>