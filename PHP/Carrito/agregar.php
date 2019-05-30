
<?php
    session_start();
    include '../../Conexion/conexionBD.php';
    $id = $_GET['codigo'];
    $cantidad1 = $_POST['txtC'];
    
    $sql = "SELECT * FROM producto WHERE produ_codigo=$id;

    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        $fila = mysqli_fetch_array($result);
        if(!isset($_SESSION['carrito'])){
            $arreglo[0]['idproducto'] = $fila['produ_codigo'];
            $arreglo[0]['nombre'] = $fila['produ_nombre'];
            $arreglo[0]['precio'] = $fila['produ_precio'];
            $arreglo[0]['cantidad'] = $cantidad;
            $_SESSION['carrito'] = $arreglo;
        }else{
            $arreglo = $_SESSION['carrito'];
            $cant = count($arreglo);
            $arreglo[$cant + 1]['idproducto'] = $fila['produ_codigo'];
            $arreglo[$cant + 1]['nombre'] = $fila['produ_nombre'];
            $arreglo[$cant + 1]['precio'] = $fila['produ_precio'];
            $arreglo[$cant + 1]['cantidad'] = $cantidad;
            $_SESSION['carrito'] = $arreglo;

        }
    }
    header("Location: carrito.php")
?>