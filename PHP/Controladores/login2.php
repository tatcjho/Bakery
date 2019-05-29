<?php
    include '../Conexion/conexionBD.php'; 
    $usuario = isset($_POST["correo"]) ? trim($_POST["correo"]) : null;     
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null; 
    $user = "SELECT * FROM usuario WHERE usu_rol='USUARIO' AND usu_correo = '$usuario' and usu_password = MD5('$contrasena')"; 
    $admin = "SELECT * FROM usuario WHERE usu_rol='ADMINISTRADOR' AND usu_correo = '$usuario' and usu_password = MD5('$contrasena')"; 
    $empresa = "SELECT * FROM empresa WHERE emp_correo='$usuario' and emp_password = MD5('$contrasena')";

    $result1 = $conn->query($user);            
    if ($result1->num_rows > 0) 
    {
        while($row = $result1->fetch_assoc()) 
        {                   
            session_start(); 
            $_SESSION['isLogged']  = TRUE;         
            header("Location: ../Usuario/index_usuario.php?codigo=". $row['usu_codigo'] . '&usuario='.$row['usu_correo'].""); 
            
            exit();    
        }
    } else 
    {             
        header("Location: ../login.php"); 
       
    }              
   
    $result2 = $conn->query($admin);            
    if ($result2->num_rows > 0) 
    {
        while($row = $result2->fetch_assoc()) 
        {                   
            session_start(); 
            $_SESSION['isLogged']  = TRUE;         
            header("Location: ../Administrador/admin_usuarios.php?codigo=". $row['usu_codigo'] . '&usuario='.$row['usu_correo'].""); 
            
            exit();    
        }
    } else 
    {             
        header("Location: ../login.php"); 
       
    }   
    
    $result3 = $conn->query($empresa);            
    if ($result3->num_rows > 0) 
    {
        while($row = $result3->fetch_assoc()) 
        {                   
            session_start(); 
            $_SESSION['isLogged']  = TRUE;         
            header("Location: ../Empresa/index_empresa.php?codigo=". $row['emp_codigo'] . '&usuario='.$row['emp_correo'].""); 
            
            exit();    
        }
    } else 
    {             
        header("Location: ../login.php"); 
       
    }   
   
?> 
 
 


 
 

