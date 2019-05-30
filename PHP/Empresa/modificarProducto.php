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
    <link rel="stylesheet" href="../../CSS/editarProducto.css">
</head>
<body>
    <div class="cabecera">
        <?php
        include("cabecera.php");
        ?>
    </div>
    <div id="derecha">
        <span id="titulo">Modificacion de Producto</span>
        <div id="contenedor">
        <?php
        $codigo=$_GET["codigo"];
        $sql="SELECT * FROM producto,prod_categoria WHERE produ_codigo=$codigo and prod_categoria.cat_id=producto.cat_id and producto.cat_id=1";
        $sql1="SELECT * FROM producto,prod_categoria WHERE produ_codigo=$codigo and prod_categoria.cat_id=producto.cat_id and producto.cat_id=2";
        $sql2="SELECT * FROM producto,prod_categoria WHERE produ_codigo=$codigo and prod_categoria.cat_id=producto.cat_id and producto.cat_id=3";
        include '../Conexion/conexionBD.php'; 
        $result=$conn->query($sql);
        $result1=$conn->query($sql1);
        $result2=$conn->query($sql2);
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                ?>
                <form id="formulario01" method="post" action="Controladores/modificarProducto.php">
                    <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>"/>
                    <label for="imagen" id="label1">Imagen</label>
                    <br>
                    <img src="../../images/panes/<?php echo $row["produ_imagen"]; ?>" width="300px" height="200px" style="margin-left:15%">   
                    <br>
                    <label for="nombre" id="label1">Nombre</label>
                    <input type="text" id="nombre" name="nombre" style="text-transform:uppercase"  value="<?php echo $row["produ_nombre"]; ?>" required placeholder="Ingresar nombre del producto"/>
                    <br>
                    <label for="precio" id="label1">Precio</label>
                    <input type="number" id="precio" name="precio" value="<?php echo $row["produ_precio"]; ?>" required placeholder="Ingresar el precio"/>
                    <br>
                    <label for="stock" id="label1">Stock</label>
                    <input type="number" id="stock" name="stock" value="<?php echo $row["produ_stock"]; ?>" required placeholder="Ingrese el stock"/>
                    <br>
                    <label for="categoria" id="label1">Categoria</label>
                    <input type="hidden" id="categoria1" name="categoria1" value="<?php echo $row["cat_id"]; ?>" required placeholder="Ingrese la fecha de nacimiento"/>
                    <input type="text" id="categoria" name="categoria" value="<?php echo $row["cat_nombre"]; ?>" readonly/>
                    <br>
                    <input type="submit" id="submit" name="modificar" value="Modificar"/>
                    <input type="reset" id="cancelar" name="cancelar" value="Cancelar"/>
                </form>
                <?php   
            }
        }else if($result1->num_rows > 0){
            while($row1=$result1->fetch_assoc()){
                ?>
                <form id="formulario01" method="post" action="Controladores/modificarProducto.php">
                    <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>"/>
                    <label for="imagen" id="label1">Imagen</label>
                    <br>
                    <img src="../../images/galletas/<?php echo $row1["produ_imagen"]; ?>" width="300px" height="200px" style="margin-left:15%">   
                    <br>
                    <label for="nombre" id="label1">Nombre</label>
                    <input type="text" id="nombre" name="nombre" style="text-transform:uppercase"  value="<?php echo $row1["produ_nombre"]; ?>" required placeholder="Ingresar nombre del producto"/>
                    <br>
                    <label for="precio" id="label1">Precio</label>
                    <input type="number" id="precio" name="precio" value="<?php echo $row1["produ_precio"]; ?>" required placeholder="Ingresar el precio"/>
                    <br>
                    <label for="stock" id="label1">Stock</label>
                    <input type="number" id="stock" name="stock" value="<?php echo $row1["produ_stock"]; ?>" required placeholder="Ingrese el stock"/>
                    <br>
                    <label for="categoria" id="label1">Categoria</label>
                    <input type="hidden" id="categoria1" name="categoria1" value="<?php echo $row1["cat_id"]; ?>" required placeholder="Ingrese la fecha de nacimiento"/>
                    <input type="text" id="categoria" name="categoria" value="<?php echo $row1["cat_nombre"]; ?>" readonly/>
                    <br>
                    <input type="submit" id="submit" name="modificar" value="Modificar"/>
                    <input type="reset" id="cancelar" name="cancelar" value="Cancelar"/>
                </form>
                <?php   
            }
        }else if($result2->num_rows > 0){
            while($row2=$result2->fetch_assoc()){
                ?>
                <form id="formulario01" method="post" action="Controladores/modificarProducto.php">
                    <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>"/>
                    <label for="imagen" id="label1">Imagen</label>
                    <br>
                    <img src="../../images/tortas/<?php echo $row2["produ_imagen"]; ?>" width="300px" height="200px" style="margin-left:15%">   
                    <br>
                    <label for="nombre" id="label1">Nombre</label>
                    <input type="text" id="nombre" name="nombre" style="text-transform:uppercase"  value="<?php echo $row2["produ_nombre"]; ?>" required placeholder="Ingresar nombre del producto"/>
                    <br>
                    <label for="precio" id="label1">Precio</label>
                    <input type="number" id="precio" name="precio" value="<?php echo $row2["produ_precio"]; ?>" required placeholder="Ingresar el precio"/>
                    <br>
                    <label for="stock" id="label1">Stock</label>
                    <input type="number" id="stock" name="stock" value="<?php echo $row2["produ_stock"]; ?>" required placeholder="Ingrese el stock"/>
                    <br>
                    <label for="categoria" id="label1">Categoria</label>
                    <input type="hidden" id="categoria1" name="categoria1" value="<?php echo $row2["cat_id"]; ?>" required placeholder="Ingrese la fecha de nacimiento"/>
                    <input type="text" id="categoria" name="categoria" value="<?php echo $row2["cat_nombre"]; ?>" readonly/>
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