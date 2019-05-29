<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="../../CSS/index1.css">



</head>

<body>
    <div class="cabecera">
        <?php
        include("cabecera.php");
        $codigo= $_GET['codigo']; 
        $usuario = $_GET['usuario'];
        ?>

    </div>

    <div class="contenedor">
   
            <div id="izquierda"> 
                
            </div>
            <table>     
                
            <tr>             
                <th>Ruc</th>             
                <th>Nombre Empresa</th>              
                <th>Dirección</th>             
                <th>Telefono</th>                         
                <th>Correo</th>             
                <th>Eliminar</th>
                <th>Modificar</th>
                <th>Cambiar contraseña</th>  
                <th>Subir Foto</th>
                <th>Productos</th>

                               
            </tr> 
 
        <?php             
        include '../Conexion/conexionBD.php';              
        $sql = "SELECT * FROM empresa WHERE emp_codigo = '$codigo'";             
        $result = $conn->query($sql);                         
        if ($result->num_rows > 0) {                                  
            while($row = $result->fetch_assoc()) {                                         
                echo "   <td>" . $row['emp_ruc'] . "</td>";                     
                echo "   <td>" . $row['emp_nombre'] ."</td>";                     
                echo "   <td>" . $row['emp_direccion'] . "</td>";                     
                echo "   <td>" . $row['emp_telefono'] . "</td>"; 
                echo "   <td>" . $row['emp_correo'] . "</td>";                                                     
                echo "   <td><a href='Controladores/eliminar.php?codigo=".$row['emp_codigo']."&usuario=".$usuario."'>Enlace Eliminar</a></td>";
                echo "   <td><a href='Controladores/modificar.php?codigo=".$row['emp_codigo']."&usuario=".$usuario."'>Enlace Modificar</a></td>";
                echo "   <td><a href='Controladores/cambiar.php?codigo=".$row['emp_codigo']."&usuario=".$usuario."'>Enlace Cambiar</a></td>";
                echo "   <td><a href='Controladores/productos.php?codigo=".$row['emp_codigo']."'>Productos</a></td>";
            echo "</tr>";
        }
                  
        } else {                 
            echo "<tr>";                 
            echo "   <td colspan='7'> Usuario no existente </td>";                 
            echo "</tr>"; 
 
            }             
            $conn->close();                  
        ?>     
        </table>     


        
    </div>
    
    <?php
    include("piepagina.php");
    ?>

</body>

</html>