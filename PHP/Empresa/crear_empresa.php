<!DOCTYPE html> <html> <head> 
    <meta charset="UTF-8">     
    <title>Crear Nueva Empresa</title>     
    <style type="text/css" rel="stylesheet">         
    .error{             
        color: red;         
        }     </style> </head> <body> 
 
    <?php                
     //incluir conexión a la base de datos         
     include 'conexionBD.php';                 
 
        $ruc = isset($_POST["ruc"]) ? trim($_POST["ruc"]) : null;         
        $nombre = isset($_POST["nombre"]) ? mb_strtoupper(trim($_POST["nombre"]), 'UTF-8') : null;         
        $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null;         
        $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]): null;                 
        $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;         
        $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;
        $fecha_Creacion = date('Y/m/d h:i:s', time());                         
        $sql = "INSERT INTO empresa VALUES (0,'$nombre', '$ruc', '$direccion', '$telefono', '$correo', MD5('$contrasena'), '$fecha_Creacion', 'N', null)";         
 
        if ($conn->query($sql) === TRUE) {             
            echo "<p>Se ha creado los datos de la empresa correctamemte!!!</p>";              
        } else {             
            if($conn->errno == 1062){                 
                echo "<p class='error'>La empresa con la cedula $cedula ya esta registrada en el sistema </p>";                  
            }else{                 echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";             
            }                     
        }                  
        //cerrar la base de datos         
        $conn->close();         
        echo "<a href='crear_empresa.html'>Regresar</a>";                   
    ?> 
 
</body> 
</html> 
 