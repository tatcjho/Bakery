<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']==false){
        header("Location: ../../login.php");
    }else if($_SESSION['usu_rol'] == "A"){
        header("Location: ../../Administrador/index_administrador.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar contraseña</title>
</head>
<body>
    <?php 
        include '../../Conexion/conexionBD.php'; 
        $codigo=$_POST["codigo"];
    
        $sql="SELECT * FROM usuario where usu_codigo=$codigo";
        $result=$conn->query($sql);
        
        if($result->num_rows > 0){
            date_default_timezone_set("America/Guayaquil");
            $fecha = date('Y-m-d H:i:s', time());
            
            $sqlContrasena2="UPDATE usuario ".
            "SET usu_eliminado='S',".
            "usu_fecha_modificacion='$fecha'".
            "WHERE usu_codigo=$codigo";
            
            if($conn->query($sqlContrasena2) === TRUE){
                echo "Cuenta eliminada :/";
                header('Refresh: 2; URL=../../Conexion/logout.php');
            }else {
                echo "<p>Error: " . mysqli_error($conn) . "</p>"; 
            }
        }
        $conn->close();
        ?>
</body>
</html>