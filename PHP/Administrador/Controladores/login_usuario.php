<?php
    session_start();
    include '../../Conexion/conexionBD.php'; 
    $usuario = isset($_POST["correo"]) ? trim($_POST["correo"]) : null;     
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null; 
    $user = "SELECT * FROM usuario WHERE usu_correo = '$usuario' and usu_password = MD5('$contrasena')"; 
    $empresa = "SELECT * FROM empresa WHERE emp_correo='$usuario' and emp_password = MD5('$contrasena')";

    $result = $conn->query($user);
    $row= mysqli_fetch_array($result);
    if ($result->num_rows > 0) {
        $_SESSION['isLogged'] = TRUE;
        $_SESSION['usu_codigo']= $row['usu_codigo'];
        $_SESSION['usu_rol'] = $row['usu_rol'];
        $_SESSION['usu_nombres']= $row['usu_nombreApellido'];
        $_SESSION['usu_correo']= $row['usu_correo'];
        if ($row['usu_rol'] == "U"){
            header("Location: ../index_usuario.php");
            exit();  
        }else{
            header("Location: ../../Administrador/index_administrador.php");
            exit();  
        }
    }else{
        header("Location: ../../login.php");
    }

    $result1 = $conn->query($empresa);
    $row1= mysqli_fetch_array($result1);
    if ($result1->num_rows > 0){
        $_SESSION['isLogged'] = TRUE;
        $_SESSION['emp_codigo']= $row1['emp_codigo'];
        $_SESSION['emp_nombre'] = $row1['emp_nombre'];
        $_SESSION['emp_ruc']= $row1['emp_ruc'];
        $_SESSION['emp_correo']= $row1['emp_correo'];
        header("Location: ../../Empresa/index_empresa.php");
        exit();  
    }else{             
        header("Location: ../../login.php");        
    }   
?>
 
 




 
 

