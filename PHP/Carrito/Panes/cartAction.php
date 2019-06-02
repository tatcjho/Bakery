<?php
// initialize shopping cart class
include 'Cart.php';
$cart = new Cart;
$usu_codigo=$_GET['usu_codigo'];
// include database configuration file
include '../../Conexion/conexionBD.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
        $productID = $_REQUEST['id'];
        // get product details
        $query = $conn->query("SELECT * FROM producto WHERE produ_codigo = ".$productID);
        $row = $query->fetch_assoc();
        $itemData = array(
            'id' => $row['produ_codigo'],
            'name' => $row['produ_nombre'],
            'price' => $row['produ_precio'],
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        #$redirectLoc = $insertItem?'viewCart.php':'index.php';
        $redirectLoc = $insertItem?"../viewCart.php":"index.php";
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: ../viewCart.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
        
        // insert order details into database
        date_default_timezone_set("America/Guayaquil");
        $fecha = date('Y/m/d h:i:s', time());   
        $total = ".$cart->total()."*1.12;
        $insertOrder = $conn->query("INSERT INTO fac_cabe_compras (cabe_codigo, cabe_fecha, cabe_subtotal, cabe_iva, cabe_total, cabe_estado, cabe_eliminado, cabe_modificado, usu_codigo) VALUES (0,'$fecha', '".$cart->total()."',1.12, '".$cart->total()*1.12."',1, 'N', 'N', $usu_codigo)");
        # Esto va en el query'".$_SESSION['sessCustomerID']."'
        if($insertOrder)
        {
            $orderID = $conn->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            # esto va en el query.$item['id']."";
            foreach($cartItems as $item)
            {
                $sql.= "INSERT INTO fac_det_compras (det_codigo, det_cantidad, det_precio, cabe_codigo, produ_codigo) VALUES (0, '".$item['qty']."', 0.50,'".$orderID."', '".$item['id']."');";
                
            }
            // insert order items into database
            $insertOrderItems = $conn->multi_query($sql);
            
            if($insertOrderItems)
            {
                $cart->destroy();
                echo "entro";
                header("Location: orderSuccess.php?id=$orderID");
            }
            else
            {
                header("Location: checkout.php?usu_codigo=".$usu_codigo."");
            }
        }
        else
        {
            header("Location: checkout.php?usu_codigo=".$usu_codigo."");
            
        }
    }
    else
    {
        header("Location: index.php");
    }
}
else
{
    header("Location: index.php");
}