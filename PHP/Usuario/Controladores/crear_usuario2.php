<!DOCTYPE html> <html> <head> 
    <meta charset="UTF-8">     
    <title>Crear Nuevo Usuario</title>     
    <style type="text/css" rel="stylesheet">         
    .error{             
        color: red;         
        }     </style> </head> <body> 
 
    <?php                
     //incluir conexión a la base de datos         
     include '../../Conexion/conexionBD.php';                 
 
        $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null;         
        $nombreApellido = isset($_POST["nombreApellido"]) ? mb_strtoupper(trim($_POST["nombreApellido"]), 'UTF-8') : null;
        $rol = isset($_POST["rol"]) ? mb_strtoupper(trim($_POST["rol"]), 'UTF-8') : null;         
        $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null;         
        $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]): null;                 
        $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;         
        $fechaNacimiento = isset($_POST["fechaNacimiento"]) ? trim($_POST["fechaNacimiento"]): null;                 
        $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;     
        $fecha_Creacion = date('Y/m/d h:i:s', time());  
        $imagen= "<input type=image src=../../images/perfil.jpg>";                                           
        $sql = "INSERT INTO usuario VALUES (0, '$rol', '$cedula', '$nombreApellido', '$direccion', '$telefono', '$correo', MD5('$contrasena'), '$fechaNacimiento','$imagen' , 'N', 'N', '$fecha_Creacion', null)";         
 
        if ($conn->query($sql) === TRUE) {             
            echo "<p>Se ha creado los datos personales correctamemte!!!</p>";              
        } else {             
            if($conn->errno == 1062)
            {                 
                echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>";                  
            }else{                 echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";             
            }                     
        }                  
        //cerrar la base de datos         
        $conn->close();         
        echo "<a href='../../login.php'>Regresar</a>";                   
    ?> 
 
</body> 
</html> 
 