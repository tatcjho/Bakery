<?php
    session_start();
    if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged']==false){
        header("Location: ../login.php");
    }else if(!isset($_SESSION['emp_nombre'])){
        if($_SESSION['usu_rol'] == "U"){
            header("Location: ../index.php");
        }if($_SESSION['usu_rol'] == "A"){
            header("Location: ../Administrador/index_administrador.php");
        }
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
        <ul>
            <li><a href="editarPerfil.php" class="active">Modificar Cuenta</a></li>
            <li><a href="editarContrasena.php">Cambiar Contraseña</a></li>
        </ul>
    </div>
    <div id="derecha">
        <span id="titulo">Modificacion de Cuenta</span>
        <div id="contenedor">
        <?php
        $codigo=$_SESSION['emp_codigo'];
        $sql="SELECT * FROM empresa WHERE emp_codigo=$codigo";
        include '../Conexion/conexionBD.php'; 
        $result=$conn->query($sql);
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                ?>
                <form id="formulario01" method="post" action="Controladores/modificarEmpresa.php">
                    <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>"/>
                    <label for="nombre" id="label1">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $row["emp_nombre"]; ?>" required placeholder="Ingresar nombre de la empresa"/>
                    <br>
                    <label for="ruc" id="label1">RUC</label>
                    <input type="text" id="ruc" name="ruc"value="<?php echo $row["emp_ruc"]; ?>" required placeholder="Ingresar nombres"/>
                    <br>
                    <label for="direccion" id="label1">Direccion</label>
                    <input type="text" id="direccion" name="direccion" style="text-transform:uppercase" value="<?php echo $row["emp_direccion"]; ?>" required placeholder="Ingresar direccion"/>
                    <br>
                    <label for="telefono" id="label1">Teléfono</label>
                    <input type="text" id="telefono" name="telefono" value="<?php echo $row["emp_telefono"]; ?>" required placeholder="Ingrese el teléfono"/>
                    <br>
                    <label for="correo" id="label1">Correo electrónico</label>
                    <input type="email" id="correo" name="correo" value="<?php echo $row["emp_correo"]; ?>" required placeholder="Ingrese el correo electrónico"/>
                    <br>
                    <input type="submit" id="submit" name="modificar" value="Modificar"/>
                    <input type="reset" id="cancelar" name="cancelar" value="Cancelar"/>
                </form>
                <?php   
            }
        }else {
            echo "<p>Ha ocurrido un error inesperado</p>";
            echo "<p>" . mysqli_error($conn) . "</p>";
        }
        $conn->close()
        ?>
        </div>
    </div>
</body>
</html>