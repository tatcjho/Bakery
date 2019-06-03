<?php
    session_start();
    if (!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] == false) {
        header("Location: login.php");
    } else if ($_SESSION['usu_rol'] == "A") {
        header("Location: Administrador/index_administrador.php");
    }
    error_reporting(0);
    ini_set('display_errors', 0);

    $usuario = $_SESSION['usu_codigo'];
    
?>

<!DOCTYPE html> 
<html> 
    <head>         
        <meta charset="UTF-8">   
        
        <title>Facturacion</title>
        
    </head> 
    <body>   
    <header>
        
        <table style="width:50%">     
                
            <tr>             
                <th>Num</th>             
                <th>Fecha Compra</th>  
                <th>SubTotal</th>  
                <th>Total</th>            
                <th>Estado de la Compra</th>             
                <th></th>             
    
            </tr>
            
        <?php             
        include '../Conexion/conexionBD.php';   
         
        $sql = "SELECT * FROM fac_cabe_compras WHERE usu_codigo=$usuario AND cabe_eliminado='N'";             
        $result = $conn->query($sql);                         
        if ($result->num_rows > 0) {                                  
            while($row = $result->fetch_assoc()) {                                        
                echo "   <td>" . $row['cabe_codigo'] . "</td>";                     
                echo "   <td>" . $row['cabe_fecha'] ."</td>";                     
                echo "   <td>" . $row['cabe_subtotal'] . "</td>";
                echo "   <td>" . $row['cabe_total'] . "</td>"; 
                echo "   <td>" . $row['cabe_estado'] . "</td>";                     
                echo "   <td><a href='Controladores/VerFactura.php?cabe_codigo=".$row['cabe_codigo']."&usu_codigo=".$usuario."&produ_codigo=".$row['produ_codigo']."'>Ver</a></td>";
                
            echo "</tr>";
        }
                  
        } else {                 
            echo "<tr>";                 
            echo "   <td colspan='7'> Error </td>";                 
            echo "</tr>"; 
 
            }             
            $conn->close();               
        ?>     
        </table>  
        </div>
    </body> 
    
 </html> 