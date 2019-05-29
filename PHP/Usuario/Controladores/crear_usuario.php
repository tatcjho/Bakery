<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="UTF-8">      
    <style type="text/css" rel="stylesheet"> 
        .error{             
            color: red;         
        }     
    </style> 
</head> 
<body>
<?php                
    include '../../Conexion/conexionBD.php';                 
    $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null;         
    $nombreApellido = isset($_POST["nombreApellido"]) ? mb_strtoupper(trim($_POST["nombreApellido"]), 'UTF-8') : null;
    $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null;         
    $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]): null;                 
    $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;         
    $fechaNacimiento = isset($_POST["fechaNacimiento"]) ? trim($_POST["fechaNacimiento"]): null;                 
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;     
    $fecha_Creacion = date('Y/m/d h:i:s', time());  
    if(isset($_FILES['img'])){
        $img_nombre=$_FILES['img']['name'];
        $sql = "INSERT INTO usuario VALUES (0, 'U', '$cedula', '$nombreApellido', '$direccion', '$telefono', '$correo', MD5('$contrasena'), '$fechaNacimiento','$img_nombre' , 'N', 'N', '$fecha_Creacion', null)";
        if ($conn->query($sql) === TRUE) {
            echo "Usuario Creado";
            header('Refresh: 1; URL=../../index.php');
        }else{
            if($conn->errno == 1062){
                echo "<p class='error'>El usuario ya se encuentra registrado en el sistema </p>";
                header('Refresh: 1; URL=../crear_usuario.php');
            }else{
                echo "<h5 class='error'>Error: " . mysqli_error($conn) . "</h5>";
                header('Refresh: 1; URL=../crear_usuario.php');
            }
        }
    }
?>
</body> 
</html> 
 