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
            header("Refresh: 2; URL=../index_empresa.php");
            
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
        }
        $conn->close();
    ?>
</body>
</html>