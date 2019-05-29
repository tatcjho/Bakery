<!DOCTYPE html> 
<html> 
    <head> 
    <meta charset="UTF-8">     
    <title>Crear Nuevo Usuario</title>     
    <style type="text/css" rel="stylesheet">         
    .error{             
        color: red;         
        }     
        </style> 
        </head> 
        <body> 
 
    <?php                
     //incluir conexión a la base de datos         
     include '../../Conexion/conexionBD.php';    
     $codigo= $_POST["codigo"];              
 
        $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;                         
        $sql = "UPDATE empresa SET emp_password=MD5('$contrasena') WHERE emp_codigo='$codigo'"; 
       
        if ($conn->query($sql) === TRUE) 
        {             
            echo "<p>Se ha actualizado la contrasena correctamemte!!!</p>";              
        } 
        else 
        {             
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";             
                              
        }                  
        //cerrar la base de datos         
        $conn->close();           
        header("Location: ../index_empresa.php?codigo=$codigo");               
    ?> 
 
</body> 
</html> 