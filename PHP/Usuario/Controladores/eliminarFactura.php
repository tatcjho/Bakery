<?php
    include '../../Conexion/conexionBD.php'; 
    $cabe_codigo= $_POST["cabe_codigo"];
    
    $sql = "UPDATE fac_cabe_compras SET cabe_eliminado='Y' WHERE cabe_codigo='$cabe_codigo'";

    if ($conn->query($sql) === TRUE) { 

        header("Location: /SistemaDeGestion/public/vista/login.html");       
    } 
    else {             
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";             
        }                     
    
    $conn->close();   
    header("Location: ../factura.php);
            
?>