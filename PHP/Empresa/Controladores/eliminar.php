<?php
    include '../../Conexion/conexionBD.php'; 
    $codigo = $_GET['codigo'];
    $usuario = $_GET['usuario'];
    $sql = "UPDATE empresa SET emp_eliminado='Y' WHERE emp_codigo='$codigo'";

    if ($conn->query($sql) === TRUE) { 

        header("Location: ../index_empresa.php");       
    } 
    else {             
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";             
        }                     
    
    $conn->close();   
    header("Location: ../index_empresa.php?codigo=$codigo&usuario=$usuario");
            
?>