<?php
// include database configuration file
include '../../Conexion/conexionBD.php';

// initializ shopping cart class
include 'Cart.php';
$usu_codigo=$_SESSION['usu_codigo'];
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: index.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = $usu_codigo;
// get customer details by session customer ID
$query = $conn->query("SELECT * FROM usuario WHERE usu_codigo = ".$_SESSION['usu_codigo']);
$custRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{width: 100%;padding: 50px;}
    .table{width: 65%;float: left;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
    </style>
</head>
<body>
<div class="container">
    <h1>Orden Previa</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' USD'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No hay articulos en tu carro......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <?php 
                $cart = $cart->total();
                $total = $cart * 1.12;
            ?>
            <td class="text-center"><strong>Total <?php echo '$'.$total.' USD'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <div class="shipAddr">
        <h4>Shipping Details</h4>
        <p><?php echo $custRow['usu_nombre']; ?></p>
        <p><?php echo $custRow['usu_correo']; ?></p>
        <p><?php echo $custRow['usu_telefono']; ?></p>
        <p><?php echo $custRow['usu_direccion']; ?></p>
    </div>
    <div class="footBtn">
        <?php echo "<a href='../../index.php' class='btn btn-warning'><i class='glyphicon glyphicon-menu-left'></i> Seguir Comprando</a>";?>
        <?php echo "<a href='cartAction.php?&action=placeOrder' class='btn btn-success orderBtn'>Comprar <i class='glyphicon glyphicon-menu-right'></i></a>";?>
    </div>
</div>
</body>
</html>