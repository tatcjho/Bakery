<?php
    session_start();
    $_SESSION["local"];
    include '../../config/conexionBD.php'
?>
<!DOCTYPE html>
<html>
   

        <div class="carroC">
        <?php
        $total=0;
        if(isset($_SESSION['carrito'])){
            $arreglo = $_SESSION['carrito'];
            echo "<table border='1px'><th>Nombre</th><th>Precio</th><th>Cantidad</th><th>Accion</th>";
            $i=0;
            foreach($arreglo as $key => $fila){
                echo "<tr>";
                echo "<td>".$fila['nombre']."</td>";
                echo "<td> $ ".number_format($fila['precio'],2,".",".")."</td>";
                echo "<td>".$fila['cantidad']."</td>";
                echo "<td><a href='eliminar.php?indice=".$i."'>Eliminar</a></td>";
                $i++;
                $total=(float)$total+(float)$fila['precio']*(float)$fila['cantidad'];
                echo "<tr>";
            }
            echo "<td class='preciolbl' colspan=3><b>Total:</b> $</td>";
            echo "<td>".$total."</td>";
            $_SESSION['total']=$total;
            echo "</table>";
        }else{
            echo "no hay productos";
        }
        echo "<a class='reglbl' href='productos.php'>SEGUIR COMPRANDO</a>";
    ?>
        </div>

        <?php
        include("piepagina.php");
        ?>
        
    </body>
</html>


