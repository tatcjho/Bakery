<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']==false){
        header("Location: ../login.php");
    }else if($_SESSION['usu_rol'] == "U"){
        header("Location: ../index.php");
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gestión de usuarios</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/admin.css">
</head>
<body>
     <div class="cabecera">
        <?php
        include("cabecera.php");
        ?>
    </div>
    <div id="tituloIndex">
        <h1>Listado de Usuarios</h1>
    </div>
    <table>
        <tr>
            <th>Cedula</th>
            <th>Nombres y Apellidos</th>
            <th>Dirección</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Fecha Nacimiento</th>
            <th>Eliminar</th>
            <th>Actualizar</th>
            <th>Cambiar Contraseña</th>
        </tr>
        <?php
        include '../Conexion/conexionBD.php';
        $sql = "SELECT * FROM productos WHERE usu_eliminado!='S' and usu_rol!='A'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                    echo " <td>" . $row['usu_cedula'] . "</td>";
                    echo " <td>" . $row['usu_nombreApellido'] ."</td>";
                    echo " <td>" . $row['usu_direccion'] . "</td>";
                    echo " <td>" . $row['usu_telefono'] . "</td>";
                    echo " <td>" . $row['usu_correo'] . "</td>";
                    echo " <td>" . $row['usu_fecha_nacimiento'] . "</td>";
                    echo " <td><a href='Controladores/eliminar_usuario.php?codigo=".$row['usu_codigo']."'>Eliminar</a></td>";
                    echo " <td><a href='Controladores/modificar_usuario.php?codigo=".$row['usu_codigo']."'>Modificar</a> </td>";
                    echo " <td><a href='Controladores/cambiar_contrasena_usuario.php?codigo=".$row['usu_codigo']."'>Cambiar contraseña</a> </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr>";
            echo " <td colspan='7'> No existen usuarios registrados en el sistema </td>";
            echo "</tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>