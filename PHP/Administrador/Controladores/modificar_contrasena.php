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
    <meta charset="UTF-8">
    <title>Modificar contraseña</title>
</head>
<body>
    <?php 
        include '../../Conexion/conexionBD.php'; 
        $codigo=$_POST["codigo"];
        $contrasena1=isset($_POST["contrasena1"]) ? trim($_POST["contrasena1"]):null;
        $contrasena2=isset($_POST["contrasena2"]) ? trim($_POST["contrasena2"]):null;
    
        $sqlContrasena1="SELECT * FROM usuario where usu_codigo=$codigo and usu_password=MD5('$contrasena1')";
        $result=$conn->query($sqlContrasena1);
        
        if($result->num_rows > 0){
            date_default_timezone_set("America/Guayaquil");
            $fecha = date('Y-m-d H:i:s', time());
            
            $sqlContrasena2="UPDATE usuario ".
            "SET usu_password=MD5('$contrasena2'),".
            "usu_fecha_modificacion='$fecha'".
            "WHERE usu_codigo=$codigo";
            
            if($conn->query($sqlContrasena2) === TRUE){
                echo "Contraseña actualizada";
                header('Refresh: 2; URL=../index_administrador.php');
            }else {
                echo "<p>Error: " . mysqli_error($conn) . "</p>"; 
            }
        }else {
            header('Refresh: 1; URL=../modificarContrasena.php');
            echo "Las contraseñas no coinciden"; 
        }
        $conn->close();
        ?>
</body>
</html>