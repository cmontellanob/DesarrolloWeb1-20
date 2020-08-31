<?php session_start(); 
include("conexion.php");
$sql="select id,correo,nombrecompleto,nivel from usuarios";

//echo $sql;
//echo "usted esta autenticado como".$_SESSION['correo'];

$resultado=$con->query($sql);
?>
<table>
	<tr>
	<th>Correo</th>
	<th>Nombre Completo</th>
	<th>Nivel</th>
	<th>Operacion</th>
	</tr>
		<?php
		while ($fila=$resultado->fetch_assoc())
		{
			?>
		<tr>
		<td><?php echo $fila['correo'];?> </td>
		<td><?php echo $fila['nombrecompleto'];?></td>
		<td><?php echo $fila['nivel'];?></td>
		<td><?php 
		switch ($fila['nivel']) 
		{case 1:
			echo "Administrador";
			break;
		case 0:
			echo "Usuario";
			break;
		}?>
		</td>
		<td><?php 
		if ($_SESSION['nivel']==1)
		{switch ($fila['nivel']) 
		{case 1:
			echo '<input type="button" onclick="cambiarnivel('.$fila['id'].',0)" value="Cambiar a Usuario">';
			break;
		case 0:
			echo '<input type="button" onclick="cambiarnivel('.$fila['id'].',1)" value="Cambiar a Administrador">';
			break;
		}}?>
			
		</td>
		</tr>
		<?php } ?>	

