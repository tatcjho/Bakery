<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']==false){
        header("Location: ../../login.php");
    }else if($_SESSION['usu_rol'] == "A"){
        header("Location: ../../Administrador/index_administrador.php");
    }
?>

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
header("Location: ../factura.php)
?>

            
