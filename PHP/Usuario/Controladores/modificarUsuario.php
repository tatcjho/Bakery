<?php
session_start();
if (!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] == false) {
    header("Location: ../../login.php");
} else if ($_SESSION['usu_rol'] == "A") {
    header("Location: ../../Administrador/index_administrador.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Modificar perfil</title>
</head>

<body>

    <?php



    include '../../Conexion/conexionBD.php';
    $codigo = $_POST["codigo"];
    $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null;
    $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null;
    $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null;
    $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]) : null;
    $fechaNacimiento = isset($_POST["fechaNacimiento"]) ? trim($_POST["fechaNacimiento"]) : null;
    $correo = isset($_POST["correo"]) ? trim($_POST["correo"]) : null;
    $correo = isset($_POST["correo"]) ? trim($_POST["correo"]) : null;

    date_default_timezone_set("America/Guayaquil");
    $fecha = date('Y-m-d H:i:s', time());


    if (isset($_FILES['img'])) {

        $img_nombre = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];
        $img_ruta = "../../../images/usuario/" . $img_nombre;

        if (copy($img_tmp, $img_ruta)) {
            echo('hola');
            $sql = "UPDATE usuario " .
                "SET usu_cedula='$cedula'," .
                "usu_nombreApellido='$nombres'," .
                "usu_direccion='$direccion'," .
                "usu_telefono='$telefono'," .
                "usu_fecha_nacimiento='$fechaNacimiento'," .
                "usu_correo='$correo'," .
                "usu_imagen='$img_nombre'," .
                "usu_fecha_modificacion='$fecha'" .
                "WHERE usu_codigo=$codigo";
            if ($conn->query($sql) === TRUE) {
                echo "Datos personales actualizados correctamente";
                header('Refresh: 2; URL=../../index.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
            }
            
        }
        echo($img_nombre);
    }
    $conn->close();
    ?>
</body>

</html>