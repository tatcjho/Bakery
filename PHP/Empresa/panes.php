<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']==false){
        header("Location: ../login.php");
    }else if(!isset($_SESSION['emp_nombre'])){
        if($_SESSION['usu_rol'] == "U"){
            header("Location: ../index.php");
        }if($_SESSION['usu_rol'] == "A"){
            header("Location: ../Administrador/index_administrador.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../CSS/productoAdmin.css">
    <link href="https://fonts.googleapis.com/css?family=Heebo" rel="stylesheet">
    <title>Panes</title>
</head>

<body>
    <div class="cabecera">
        <?php
        include("cabecera.php");
        ?>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="sub">
            <div class="tit">
                <h4>Panes</h4>
            </div>
            <div class="hiper">
                <a href="panes.php">Panes</a>
                <a href="cake.php">Tortas &amp; Cupcakes</a>
                <a href="cookies.php">Galletas</a>
                <a href="#Favoritos">Favoritos</a>            
            </div>
        </div>
    <br>
    <br>
        <div class="container">
        <?php
            include '../Conexion/conexionBD.php';
            $sql = "SELECT * FROM producto WHERE cat_id=1 and produ_eliminado !='S'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='row'>";
                        echo "<div class='col-3'>";
                            echo "<div class='card'>";
                                echo "<img class='card-img-top' src='../../images/panes/".$row['produ_imagen']."' alt=''>";
                                echo "<div class='card-body'>";
                                    echo "<h5 class='card-title'>$".$row['produ_precio']."</h5>";
                                    echo "<p class='card-text'>".$row['produ_nombre']."</p>";
                                    echo "<a href='modificarProducto.php?codigo=".$row['produ_codigo']."'><div class='btn-primary'>Modificar</div></a>";
                                    echo "<a href='eliminarProducto.php?codigo=".$row['produ_codigo']."'><div class='btn-primary'>Eliminar</div></a>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                }
            }else {
                echo "No existen productos registrados";
            }
        $conn->close();
        ?>  
        </div>
    </div>
</body>
</html>