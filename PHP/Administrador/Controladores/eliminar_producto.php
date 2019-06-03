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
                                             
        $sql="UPDATE producto ".
        "SET produ_eliminado='S'".
        "WHERE produ_codigo=$codigo";                                   
        if ($conn->query($sql) === TRUE) {
            echo "Producto eliminado correctamente";
            header("Refresh: 2; URL=../index_administrador.php");
            
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
        }
        $conn->close();
    ?>
</body>
</html>