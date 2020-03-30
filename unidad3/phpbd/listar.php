<?php include("conexion.php");
$sql="select id,nombre,apellidos,edad,sexo,celular,estado,fecha from persona";
echo $sql;
$resultado=$con->query($sql);
?>
<table>
	<th>Nombres</th>
	<th>Apellidos</th>
	<th>Edad</th>
	<th>Sexo</th>
	<th>Celular</th>
	<th>Estado</th>
	<th>Fecha</th>
	<tr>
		<?php
		while ($fila=$resultado->fetch_assoc())
		{
			?>
		<tr>
		<td><?php echo $fila['nombre'];?> </td>
		<td><?php echo $fila['apellidos'];?></td>
		<td><?php echo $fila['edad'];?></td>
		<td><?php echo $fila['sexo'];?></td>
		<td><?php echo $fila['celular'];?></td>
		<td><?php echo $fila['estado'];?></td>
		<td><?php echo $fila['fecha'];?></td>
		</tr>
		<?php 
		}
		?>
	</tr>

</table>
