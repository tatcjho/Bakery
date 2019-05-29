<?php
    include '../../Conexion/conexionBD.php'; 
    $codigo = $_GET['codigo'];
    ?>  
        <head>     
        <meta charset="UTF-8"> 
        <link rel="stylesheet" href="../../../CSS/crear_usuario.css">
        </head> 
        <body>
        
        <div class="contenedor">
        <div class="ancholetras">
        <div class="texto">
        </head> 
        <form id="formulario03" method="POST" action="cambiar2.php">
        <h2 id="logo"> <img src="CSS/sendfast.jpg" alt=""></h2>
        <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />

        <input type='label' name='clave' value="Ingrese la nueva contraseña" disabled="disabled"/>
        <input type='password' name='clave' value="" />
        <input type="submit" id="crear" name="crear" value="Aceptar" />         
        <input type="reset" id="cancelar" name="cancelar" value="Cancelar" onClick="history.back()"/>
    

        <?php        
        
    $conn->close();  

        
    ?>
    </div>
    </div>
    </div>