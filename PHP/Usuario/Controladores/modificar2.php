<!DOCTYPE html> 
<html> 
    <head> 
    <meta charset="UTF-8">     
    
    <?php                
     //incluir conexión a la base de datos         
     include '../../Conexion/conexionBD.php';  
      $codigo= $_POST["codigo"];
      $usuario= $_POST["usuario"];           

        $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null;         
        $nombreApellido = isset($_POST["nombreApellido"]) ? mb_strtoupper(trim($_POST["nombreApellido"]), 'UTF-8') : null;         
        $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null;         
        $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]): null;                 
        $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;         
        $fechaNacimiento = isset($_POST["fechaNacimiento"]) ? trim($_POST["fechaNacimiento"]): null;
                                                 
        $sql = "UPDATE usuario SET usu_cedula='$cedula',usu_nombreApellido='$nombreApellido',usu_direccion='$direccion',usu_telefono='$telefono',usu_correo='$correo',usu_fecha_nacimiento='$fechaNacimiento' WHERE usu_codigo='$codigo'"; 
 
        if ($conn->query($sql) === TRUE) 
        {             
            echo "<p>Se han actualizado los datos personales correctamemte!!!</p>";              
        } else {             
                echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";             
                                
        }                  
        //cerrar la base de datos         
        $conn->close();         
        header("Location: cuenta.php?codigo=$codigo&usuario=$usuario");  
                                  
    ?> 
 
</body> 
</html> 