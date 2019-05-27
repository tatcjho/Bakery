<?php

include 'conexionBD.php'; 
 
    $usuario = isset($_POST["correo"]) ? trim($_POST["correo"]) : null;     
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null; 
 
    $sql = "SELECT * FROM empresa WHERE  emp_correo = '$usuario' and emp_password = MD5('$contrasena')"; 

    $result = $conn->query($sql);            
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {                   
            session_start(); 
            $_SESSION['isLogged']  = TRUE;         
            header("Location: index.php?codigo=". $row['emp_codigo'] . '&usuario='.$row['emp_correo'].""); 
            
            exit();    
        }
    } else 
    {             
        header("Location: loginEmp.php"); 
       
    }              
   
?> 
 
 

