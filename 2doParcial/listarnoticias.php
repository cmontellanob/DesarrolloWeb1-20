<?php session_start(); 
include("conexion.php");
$sql="select id,fecha,titulo,texto,imagen from noticias";

//echo $sql;
//echo "usted esta autenticado como".$_SESSION['correo'];

$resultado=$con->query($sql);
?>
<table>
	<tr>
	<th>imagen</th>
	<th>fecha</th>
	<th>titulo</th>
	<th>texto</th>
	
	</tr>
		<?php
		while ($fila=$resultado->fetch_assoc())
		{
			?>
		<tr>
		<td><img src="images/<?php echo $fila['imagen'];?>" width="100px" height="100px"> </td>
		<td><?php echo $fila['fecha'];?></td>
		<td><?php echo $fila['titulo'];?></td>
		<td><?php echo $fila['texto'];?></td>
		
		</tr>
		<?php }?>	

