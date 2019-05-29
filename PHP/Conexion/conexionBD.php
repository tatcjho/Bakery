<?php          
$db_servername = "http://cocolatebakery.orgfree.com";     
$db_username = "8262";     
$db_password = "skates95"; 
$db_name = "8262";                  
$conn = new mysqli($db_servername, $db_username, $db_password, $db_name);     
$conn->set_charset("utf8");          
# Probar conexión     
if ($conn->connect_error) {                             
    die("Connection failed: " . $conn->connect_error);     
}else{   
    echo "conexion exitosa";              
         } 
 
?> 