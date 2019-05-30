<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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
            <a href="index.php"><img src="../images/logo/oe1.png" alt="logo" id="logoP" /></a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i> Inicio</a></li>
                <li class="submenu">
                    <a href="#"> <i class="fab fa-product-hunt"></i> Productos<span class="fa fa-caret-down"></span></a>
                    <ul class="children">
                    <?php
                    session_start();
                        echo "<li><a href='panes.php?usu_codigo=".$_SESSION['usu_codigo']."'>Panes</a></li>";
                        echo "<li><a href='cookies.php?usu_codigo=".$_SESSION['usu_codigo']."'>Galletas</a></li>";
                        echo "<li><a href='cake.php?usu_codigo=".$_SESSION['usu_codigo']."'>Tortas</a></li>";
                    ?>
                    </ul>
                </li>
                <li><a href="sucuCuenca.php"> <i class="fas fa-id-card"></i> Contactos</a></li>
                <?php
                    
                    if(isset($_SESSION['isLogged'])){
                        echo "<li class='submenu'>";
                            echo "<a href='#'><i class='fas fa-user-friends'></i> ".$_SESSION['usu_nombres']."<span class='fa fa-caret-down'></span></a>";
                            echo "<ul class='children'>";
                            echo "<li><a href='Usuario/editarPerfil.php'>Editar Perfil</a></li>";
                            echo "<li><a href='Conexion/logout.php'>Cerrar Sesion</a></li>";
                            echo "</ul>";
                        echo "</li>";
                    }else{
                        echo "<li><a href='login.php'> <i class='fas fa-user-friends'></i> Iniciar Sesion</a></li>";        
                    }
                ?>
                <li><a href="#"><i class="fas fa-cart-plus"></i></a></li>
            </ul>
        </nav>
    </header>
</body>
</html>