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
    <style type="text/css" rel="stylesheet">
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    include '../../Conexion/conexionBD.php';

    $codigo = $_SESSION['usu_codigo'];
    
    date_default_timezone_set("America/Guayaquil");
    $fecha = date('Y-m-d H:i:s', time());
    
    if(isset($_FILES['img'])){
        $img_nombre=$_FILES['img']['name'];
        $img_tmp=$_FILES['img']['tmp_name'];
        $img_ruta="../../../images/usuario/".$img_nombre;
        if(copy($img_tmp,$img_ruta)){
            $sql = "UPDATE usuario " .
            "SET usu_imagen='$img_nombre'," .
            "usu_fecha_modificacion='$fecha'" .
            "WHERE usu_codigo=$codigo";
            if ($conn->query($sql) === TRUE) {
                echo "Imagen de perfil actualizada";
                header('Refresh: 2; URL=../../index.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
            } 
        }
    }
    ?>
</body>

</html>