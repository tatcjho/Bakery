<?php
   include '../Conexion/conexionBD.php'; 
   
   $producto = $_GET['producto'];
   $precio = floatval($_GET['precio']);

   echo "$precio";
   
    $fecha = date('Y/m/d h:i:s', time());  
     
                        
    $sql = "INSERT INTO fac_det_compras VALUES (0, 1, $precio, 1, '$producto')";     
    if ($conn->query($sql) === TRUE) 
    {             
        echo "<p>Se ha aniadido al carro!!!</p>";              
    } else {             
        if($conn->errno == 1062){                 
                          
        }else{                 echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";             
        }                     
    }

        header("Refresh: 2; URL=../panes.php");



?>