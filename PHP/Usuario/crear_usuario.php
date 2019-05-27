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
               <form id="formulario01" method="POST" action="../Usuario/Controladores/crear_usuario2.php">    
                    <h2>Registrarse</h2>
                    <input type="text" id="cedula" name="cedula" value="" placeholder="Cedula" required/>         
                    <br>

                    <input type="text" id="rol" name="rol" value="" placeholder="Rol" required/>         
                    <br>

                    <input type="text" id="nombreApellido" name="nombreApellido" value="" placeholder="Nombres y Apellidos" required/>         
                    <br> 
                    <input type="text" id="direccion" name="direccion" value="" placeholder="Direccion" required/>         
                    <br> 
                    <input type="text" id="telefono" name="telefono" value="" placeholder="Telefono" required/>         
                    <br>                        
                    <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="" placeholder="Fecha Nacimiento" required/>         
                    <br>                   
                    <input type="email" id="correo" name="correo" value="" placeholder="Correo Electronico" required/>         
                    <br>
                    <input type="password" id="contrasena" name="contrasena" value="" placeholder="Contraseña" required/>         
                    <br>      
                    <input type="submit" id="crear" name="crear" value="Registrarse" />         
                    <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />     
                </form> 
            </div>
        </div>
        <div id="fondo1"></div>
    </div>
</body> 
</html> 