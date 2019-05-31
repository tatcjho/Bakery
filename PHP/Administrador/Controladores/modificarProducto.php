<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']==false){
        header("Location: ../login.php");
    }else if($_SESSION['usu_rol'] == "U"){
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta  charset="utf-8">
    <title>Modificar perfil</title>
</head>
<body>
    <?php
        include '../../Conexion/conexionBD.php'; 
        $codigo=$_POST["codigo"];
        $nombre=isset($_POST["nombre"]) ? mb_strtoupper(trim($_POST["nombre"]), 'UTF-8'):null;
        $precio=isset($_POST["precio"]) ? trim($_POST["precio"]):null;
        $stock=isset($_POST["stock"]) ? trim($_POST["stock"]):null;
        $categoria=isset($_POST["categoria"]) ? mb_strtoupper(trim($_POST["categoria"]), 'UTF-8'):null;
                                             
        date_default_timezone_set("America/Guayaquil");
        $fecha = date('Y-m-d H:i:s', time());
                                             
        $sql="UPDATE producto ".
        "SET produ_nombre='$nombre',".
        "produ_precio='$precio',".
        "produ_stock='$stock',".
        "cat_id='$categoria'".
        "WHERE produ_codigo=$codigo";                                   
        if ($conn->query($sql) === TRUE) {
            echo "Producto modificado correctamente";
            header('Refresh: 2; URL=../index_administrador.php');
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
        }
        $conn->close();
    ?>                                  
</body>
</html>