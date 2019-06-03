<?php
    session_start();
    include '../../Conexion/conexionBD.php';
    $salida="";
    $query = "SELECT * FROM usuario WHERE usu_rol!='A' and usu_eliminado!='S' ORDER BY usu_nombreApellido ASC";
    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM usuario WHERE usu_rol!='A' and usu_eliminado!='S' and usu_nombreApellido LIKE '%$q%' ORDER BY usu_nombreApellido ASC";
    }
    $resultado = $conn->query($query);
    if ($resultado->num_rows>0) {
    	$salida.="<table>
    				<tr>
    					<th>Cedula</th>
    					<th>Usuario</th>
    					<th>Direccion</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th></th>
    				</tr>";
    	while ($row = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$row['usu_cedula']."</td>
    					<td>".$row['usu_nombreApellido']."</td>
                        <td>".$row['usu_direccion']."</td>
                        <td>".$row['usu_telefono']."</td>
                        <td>".$row['usu_correo']."</td>
                        <td><a href='modificarUsuario.php?codigo=".$row['usu_codigo']."'>Modificar</a></td>
    				</tr>";
    	}
    	$salida.="</table>";
    }else{
    	$salida.="<table>
                    <tr>
    					<th>Fecha</th>
    					<th>Emisor</th>
    					<th>Asunto</th>
    				</tr>
                    <tr><td colspan='6'> No se encontraron resultados </td></tr>
                  </table>";
    }
    echo $salida;
    $conn->close();
?>