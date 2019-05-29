<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']==FALSE){
        header("Location: /SistemaDeGestion/public/vista/login.html");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="CSS/estilo3.css" rel="stylesheet" /> 
    <title>Modificar Foto</title>
</head>
<body class="fondoCrear">
    <?php 
        $codi= $_GET['codigo']; 
    ?>
    
   <form  method="post" action="subirFoto.php?codigo=<?php echo $codi ?>" enctype="multipart/form-data">
            <h3>Selecciona la imagen</h3>
            <br>
            <input type="file" name="txtImg">
            <br>
            <button type="submit" name="aceptar" value="aceptar"></button>
            <input type="button" name="cancelar" value="cancelar" onClick="history.back()">
   </form>
</body>
</html>