<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']==false){
        header("Location: ../login.php");
    }else if($_SESSION['usu_rol'] == "U"){
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="../../CSS/editarPerfil.css">
</head>

<body>
    <div class="cabecera">
        <?php
        include("cabecera.php");
        ?>
    </div>
    <div id="navIzq">
        <?php
        $codigo=$_GET["codigo"];
        ?>
        <ul>
            <li><a href="" class="active">Modificar Cuenta</a></li>
            <li><a href="modificarContrasena.php?codigo=<?php echo $codigo?>">Cambiar Contraseña</a></li>
            <li><a href="#contact" class="eliminar">Eliminar Cuenta</a></li>
        </ul>
    </div>
    <div id="derecha">
        <span id="titulo">Modificacion de Cuenta</span>
        <div id="contenedor">
            <?php
            $codigo=$_GET["codigo"];
            $sql = "SELECT * FROM usuario WHERE usu_codigo=$codigo";
            include '../Conexion/conexionBD.php';
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <form id="formulario01" method="post" action="Controladores/modificar_usuario.php">
                        <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
                        <label for="cedula" id="label1">Cedula</label>
                        <input type="text" id="cedula" name="cedula" value="<?php echo $row["usu_cedula"]; ?>" required placeholder="Ingresar cedula" />
                        <br>
                        <label for="nombres" id="label1">Nombres</label>
                        <input type="text" id="nombres" name="nombres" style="text-transform:uppercase" value="<?php echo $row["usu_nombreApellido"]; ?>" required placeholder="Ingresar nombres" />
                        <br>
                        <label for="apellidos" id="label1">Direccion</label>
                        <input type="text" id="direccion" name="direccion" style="text-transform:uppercase" value="<?php echo $row["usu_direccion"]; ?>" required placeholder="Ingresar direccion" />
                        <br>
                        <label for="telefono" id="label1">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" value="<?php echo $row["usu_telefono"]; ?>" required placeholder="Ingrese el teléfono" />
                        <br>
                        <label for="fecha" id="label1">Fecha Nacimiento</label>
                        <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo $row["usu_fecha_nacimiento"]; ?>" required placeholder="Ingrese la fecha de nacimiento" />
                        <br>
                        <label for="correo" id="label1">Correo electrónico</label>
                        <input type="email" id="correo" name="correo" value="<?php echo $row["usu_correo"]; ?>" required placeholder="Ingrese el correo electrónico" />
                        <div class="foto">
                            <img src="../../images/usuario/<?php echo ($row["usu_imagen"]) ?>" alt="">
                            <br>
                            <br>
                            <input type="file" name="foto" id="foto">
                        </div>
                        <br>
                        <input type="submit" id="submit" name="modificar" value="Modificar" />
                        <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
                    </form>
                <?php
            }
        } else {
            echo "<p>Ha ocurrido un error inesperado</p>";
            echo "<p>" . mysqli_error($conn) . "</p>";
        }
        $conn->close()
        ?>
        </div>
    </div>
</body>

</html>