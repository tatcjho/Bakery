<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Orden Exitosa</title>
    <meta charset="utf-8">
    <style>
    .container{
        width: 100%;
        padding: 20px;
        font-family: sans-serif;
        font-size: 20px;
    }
    </style>
</head>
<body>
<div class="container">
    <h1>Orden relizada</h1>
    <h3>Tu orden se ha realizado con exito. El codigo de su orden es el #<?php echo $_GET['id']; ?></h3>
    <?php 
        header('Refresh: 3; URL=../../index.php'); 
        
    ?>
</div>
</body>
</html>