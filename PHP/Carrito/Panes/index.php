<?php
// include database configuration file
include '../../Conexion/conexionBD.php';
$usu_codigo=$_GET['usu_codigo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Carrito de Compras</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{padding: 50px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 22px;}
    </style>
</head>
</head>
<body>
<div class="container">
    <h1>Productos</h1>
    <a href='viewCart.php?usu_codigo=".$usu_codigo."' class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
   
    <div id="products" class="row list-group">
        <?php
        //get rows query
        
        
        $query = $conn->query("SELECT * FROM producto WHERE cat_id=1");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="item col-lg-4">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["cat_id"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["produ_nombre"]; ?></p>
                    <?php #echo "<p><img class='card-img-top' src='../../images/panes/".$row['produ_imagen']."' alt=''></p>"; ?>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["produ_precio"].' USD'; ?></p>
                        </div>
                        <div class="col-md-6">
                            
                            <?php echo "<a class='btn btn-success' href='cartAction.php?usu_codigo=".$usu_codigo."&action=addToCart&id=".$row['produ_codigo']."'>Añadir al carro</a>";?>
                                                                 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } }else{ ?>
        <p>No se encontro el producto</p>
        <?php } ?>
    </div>
</div>
</body>
</html>