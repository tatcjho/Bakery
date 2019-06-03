<?php
    session_start();
    if (!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] == false) {
        ("Location: login.php");
    } else if ($_SESSION['usu_rol'] == "A") {
        ("Location: Administrador/index_administrador.php");
    }
    error_reporting(0);
    ini_set('display_errors', 0);

    $usuario = $_SESSION['usu_codigo'];
    
?>

<!DOCTYPE html> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compras</title>
    <link rel="stylesheet" href="../../CSS/compras.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>

<body>
    <div class="cabecera">
        <?php
        include("cabecera.php");
        ?>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <h5>COMPRAS REALIZADAS</h5>



        <table style="width:50%">     
                
            <tr>             
                <th>Codigo</th>             
                <th>Fecha Compra</th>  
                <th>SubTotal</th>  
                <th>Total</th>            
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
                echo "   <td><a href='Controladores/VerFacturaUsuario.php?cabe_codigo=".$row['cabe_codigo']."&usu_codigo=".$usuario."&produ_codigo=".$row['produ_codigo']."'>Ver Factura</a></td>";
                
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