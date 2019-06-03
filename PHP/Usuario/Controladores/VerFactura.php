<?php
session_start();
if (!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] == false) {
    header("Location: ../login.php");
} else if ($_SESSION['usu_rol'] == "A") {
    header("Location: ../Administrador/index_administrador.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura</title>
    <link rel="stylesheet" href="../../../CSS/editarPerfil.css">
</head>



<div class="mercadofactura-container">
<div id="mercadofactura-checkout">
<h1>Datos de Comprador</h1>
    <form class="mercadofactura-form"  method="post" action="eliminarFactura.php">
            
                        <label for="numFac" id="label1">Num Factura</label>
                        <input type="label" id="cabe_codigo" value="<?php echo $row["cabe_codigo"]; ?>" read_only" />
                        <br>
                        <label for="nombres" id="label1">Nombres y Apellidos</label>
                        <input type="label"  style="text-transform:uppercase" value="<?php echo $row["usu_nombreApellido"]; ?>" required placeholder="Ingresar nombres" />
                        <br>
                        <label for="cedula" id="label1">Cedula</label>
                        <input type="label" value="<?php echo $row["usu_cedula"]; ?>" read_only" />
                        <br>
                        <label for="direccion" id="label1">Direccion</label>
                        <input type="label"  value="<?php echo $row["usu_direccion"]; ?>" read_only" />
                        <br>
                        <label for="telefono" id="label1">Telefono</label>
                        <input type="label"  value="<?php echo $row["usu_telefono"]; ?>" read_only" />
                        <br>
                        <label for="fecha" id="label1">Fecha</label>
                        <input type="label"  value="<?php echo $row["cabe_fecha"]; ?>" read_only" />
                        <br>
                        <label for="iva" id="label1">Iva</label>
                        <input type="label" value="<?php echo $row["cabe_iva"]; ?>" read_only" />
                        <br>
                        <label for="subtotal" id="label1">Subtotal</label>
                        <input type="label" value="<?php echo $row["cabe_subtotal"]; ?>" read_only" />
                        <br>


                        <label for="total" id="label1">Total</label>
                        <input type="label" value="<?php echo $row["cabe_total"]; ?>" read_only" />
                        <br>
                        <label for="estado" id="label1">Estado</label>
                        <input type="label" value="<?php echo $row["cabe_estado"]; ?>" read_only" />
                        <br>
                        <input type="submit" id="submit" value="Eliminar" />
    
    </form>
</div>
</div>

   
    <div id="derecha">
        <span id="titulo">Factura</span>
        <div id="contenedor">
            <?php
            include '../../Conexion/conexionBD.php';
            $cabe_codigo = $_GET['cabe_codigo'];
            $usu_codigo = $_GET['usu_codigo'];

            $sql = "SELECT fac_cabe_compras.cabe_codigo, usu_cedula, usu_nombreApellido, usu_direccion, usu_telefono, cabe_fecha, cabe_subtotal, cabe_iva, cabe_total, cabe_estado FROM usuario,fac_cabe_compras  WHERE  fac_cabe_compras.usu_codigo=usuario.usu_codigo AND cabe_codigo=$cabe_codigo AND fac_cabe_compras.usu_codigo=$usu_codigo";
            
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>


                    


                    <td>
                        <a href="Panes/cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Esta Seguro?')"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
       
                    <?php } }else{ ?>
                         <tr><td colspan="5"><p>Tu carrito esta vacio.....</p></td>
                    <?php } ?>
                    <?php 
        $conn->close()
        ?>
        <table style="width:70%">     
                
        <tr>             
            <th>Producto</th>             
            <th>Cantidad</th>  
            <th>Precio</th>  
            <th>Estado</th>       
    
        </tr>
            
        <?php             
         include '../../Conexion/conexionBD.php';
         
        $sql = "SELECT produ_nombre, det_cantidad, det_precio FROM usuario, producto, fac_cabe_compras, fac_det_compras  WHERE  fac_det_compras.cabe_codigo=fac_cabe_compras.cabe_codigo AND fac_det_compras.produ_codigo=producto.produ_codigo AND fac_cabe_compras.usu_codigo=usuario.usu_codigo AND fac_det_compras.cabe_codigo=$cabe_codigo AND fac_cabe_compras.usu_codigo=$usu_codigo";             
        $result = $conn->query($sql);                         
        if ($result->num_rows > 0) {                                  
            while($row = $result->fetch_assoc()) {                                        
                echo "   <td>" . $row['produ_nombre'] . "</td>";                     
                echo "   <td>" . $row['det_cantidad'] ."</td>";                     
                echo "   <td>" . $row['det_precio'] . "</td>";
                
                
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
</div>
</body>

</html>