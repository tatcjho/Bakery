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
        $codigo= $_GET['codigo']; 
        $usuario = $_GET['usuario'];
        ?>
        <br>
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
        $sql = "SELECT * FROM usuario WHERE usu_eliminado!='S' and usu_rol!='A'";
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
                echo "   <td><a href='Controladores/eliminar.php?codigo=".$row['usu_codigo']."&usuario=".$usuario."'>Enlace Eliminar</a></td>";
                echo "   <td><a href='Controladores/modificar.php?codigo=".$row['usu_codigo']."&usuario=".$usuario."'>Enlace Modificar</a></td>";
                echo "   <td><a href='Controladores/cambiar.php?codigo=".$row['usu_codigo']."&usuario=".$usuario."'>Enlace Cambiar</a></td>";

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