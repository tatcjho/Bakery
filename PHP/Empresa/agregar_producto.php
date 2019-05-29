<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']==false){
        header("Location: ../login.php");
    }
?>
<!DOCTYPE html> 
<html> 
    <head>     
        <meta charset="UTF-8"> 
        <title>Registrarse</title>
        <link rel="stylesheet" href="../../CSS/crear_usuario.css">
    </head> 
    <body>
        <div class="cabecera">
        <?php
        include("cabecera.php");
        ?>
    </div>
    <div class="contenedor">
        <div class="ancholetras">
            <div class="texto">
               <form id="formulario01" method="POST" action="Controladores/crear_producto.php" enctype="multipart/form-data">    
                    <h2>Agregar Nuevo Producto</h2>
                    <input type="text" id="nombre" name="nombre" value="" placeholder="Nombre del producto" required/>         
                    <br>
                    <input type="text" id="precio" name="precio" value="" placeholder="Valor del producto" required/>         
                    <br> 
                    <input type="number" id="stock" name="stock" value="" placeholder="Cantidad del producto" required/>         
                    <br> 
                    <input type="number" id="categoria" name="categoria" value="" placeholder="Categoria del producto" required/>         
                    <br> 
                    <input type="file" id="img" name="img"/>
                    <br>
                    <input type="submit" id="crear" name="crear" value="Agregar" />        
                    <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />     
                </form> 
            </div>
        </div>
        <div id="fondo1"></div>
    </div>
</body> 
</html> 