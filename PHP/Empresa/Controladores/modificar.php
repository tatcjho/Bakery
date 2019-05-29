<?php
   include '../../Conexion/conexionBD.php';  
    $codigo = $_GET['codigo'];
    $usuario = $_GET['usuario'];
    $sql = "SELECT emp_codigo, emp_ruc, emp_nombre, emp_direccion, emp_telefono, emp_correo FROM empresa WHERE emp_codigo='$codigo'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {                                  
        while($row = $result->fetch_assoc()) 
        {           
          ?>  
            <head>     
                <link href="CSS/estilo1.css" rel="stylesheet" />
                <meta charset="UTF-8"> 
                <title>Modificar Datos</title>
                <h1>Modificar Datos</h1>
            </head> 
            <form id="formulario02" method="POST" action="modificar2.php">
            <h2 id="logo"> <img src="CSS/sendfast.jpg" alt=""></h2>
            
            <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
            <input type="hidden" id="usuario" name="usuario" value="<?php echo $usuario ?>" />
            <br>
           
            <input type='text' name='ruc' value="<?php echo $row['emp_ruc']?>" />
            <br>
           
            <input type='text' name='nombre' value="<?php echo $row['emp_nombre'] ?>" />
            <br>
            
           
            <input type='text' name='direccion' value="<?php echo $row['usu_direccion']?>" />
            <br>
           
            <input type='text' name='telefono' value="<?php echo $row['usu_telefono']?>" />
            <br>
           
           
            <input type='email' name='correo' value="<?=$row['emp_correo']?>" />

            <input type="submit" id="crear" name="crear" value="Aceptar" />         
            <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />

            <?php        
            
        }
        
        
    } 
    else {             
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";             
        }
        
        
    
    $conn->close();  
?>