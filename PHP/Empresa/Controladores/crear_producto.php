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
<html> 
<head> 
    <meta charset="UTF-8">      
    <style type="text/css" rel="stylesheet"> 
        .error{             
            color: red;         
        }     
    </style> 
</head> 
<body>
<?php                
    include '../../Conexion/conexionBD.php';                 
    $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : null;         
    $precio = isset($_POST["precio"]) ? trim($_POST["precio"]) : null;
    $stock = isset($_POST["stock"]) ? trim($_POST["stock"]) : null;
    $categoria = isset($_POST["categoria"]) ? trim($_POST["categoria"]) : null;
    if(isset($_FILES['img'])){
        $img_nombre=$_FILES['img']['name'];
        $sql = "INSERT INTO producto VALUES (0, '$nombre', '$precio', '$stock', '$img_nombre', 'N', '$categoria', 1)";
        if ($conn->query($sql) === TRUE) {
            echo "Producto Creado";
            header('Refresh: 1; URL=../agregar_producto.php');
        }else{
            if($conn->errno == 1062){
                echo "<p class='error'>El producto ya se encuentra registrado </p>";
            }else{
                echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";    
            }
        }
    }
?>
</body> 
</html>