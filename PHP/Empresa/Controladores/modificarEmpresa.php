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
        $nombre=isset($_POST["nombre"]) ? mb_strtoupper(trim($_POST["nombre"]), 'UTF-8'):null;
        $ruc=isset($_POST["ruc"]) ? trim($_POST["ruc"]):null;
        $direccion=isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8'):null;
        $telefono=isset($_POST["telefono"]) ? trim($_POST["telefono"]):null;
        $correo=isset($_POST["correo"]) ? trim($_POST["correo"]):null;
                                             
        date_default_timezone_set("America/Guayaquil");
        $fecha = date('Y-m-d H:i:s', time());
                                             
        $sql="UPDATE empresa ".
        "SET emp_nombre='$nombre',".
        "emp_ruc='$ruc',".
        "emp_direccion='$direccion',".
        "emp_telefono='$telefono',".
        "emp_correo='$correo',".                                             
        "emp_fecha_modifica='$fecha'".
        "WHERE emp_codigo=$codigo";                                   
        if ($conn->query($sql) === TRUE) {
            echo "Datos de la empresa modificados correctamente";
            header('Refresh: 2; URL=../index_empresa.php');
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
        }
        $conn->close();
    ?>                                  
</body>
</html>