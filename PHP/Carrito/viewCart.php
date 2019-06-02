<?php
// initializ shopping cart class
include 'Panes/Cart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ver carro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{padding: 50px;}
    input[type="number"]{width: 20%;}
    </style>
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('fallo al actualizar, intenta otra vez');
            }
        });
    }
    </script>
</head>
<body>
<div class="container">
    <h1>Carro de Compras</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th> </th>
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
            <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
            <td>
                <a href="Panes/cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Esta Seguro?')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Tu carrito esta vacio.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <?php echo "<td><a href='../index.php' class='btn btn-warning'><i class='glyphicon glyphicon-menu-left'></i> Seguir Comprando</a></td>";?>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <?php $cart=$cart->total(); ?>
            <?php $total = $cart*1.12; ?>
            <td class="text-center"><strong>Total <?php echo '$'.$total.' USD'; ?></strong></td>
            <?php echo " <td><a href='Panes/checkout.php' class='btn btn-success btn-block'>Checkout <i class='glyphicon glyphicon-menu-right'></i></a></td>";?>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
</div>
</body>
</html>