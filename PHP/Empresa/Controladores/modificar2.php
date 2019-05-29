<!DOCTYPE html> 
<html> 
    <head> 
    <meta charset="UTF-8">     
    
        </head> 
        <body> 
 
    <?php                
     //incluir conexión a la base de datos         
     include '../../Conexion/conexionBD.php'; 
      $codigo= $_POST["codigo"];
      $usuario= $_POST["usuario"];           

        $ruc = isset($_POST["ruc"]) ? trim($_POST["ruc"]) : null;         
        $nombre = isset($_POST["nombre"]) ? mb_strtoupper(trim($_POST["nombre"]), 'UTF-8') : null;         
        $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null;         
        $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]): null;                 
        $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;
        $fecha_Modificacion = date('Y/m/d h:i:s', time());                                  
                                                 
        $sql = "UPDATE empresa SET emp_nombre='$nombre', emp_ruc='$ruc', emp_direccion='$direccion',emp_telefono='$telefono',emp_correo='$correo',emp_modifica='Y', emp_fecha_modifica='$fecha_Modificacion' WHERE emp_codigo='$codigo'"; 
 
        if ($conn->query($sql) === TRUE) 
        {             
            echo "<p>Se han actualizado los datos de la empresa correctamemte!!!</p>";              
        } else {             
                echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";             
                                
        }                  
        //cerrar la base de datos         
        $conn->close();         
        header("Location: ../index_empresa.php?codigo=$codigo&usuario=$usuario");  
                                  
    ?> 
 
</body> 
</html> 