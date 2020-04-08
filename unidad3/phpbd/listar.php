<?php include('comprobar.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Personas relacionadas al Coronavirus</title>
</head>
<body>
	

<?php include("conexion.php");
$sql="select persona.id,fotografia,nombre,apellidos,edad,sexo,procedencia,celular,estado,fecha from persona left join procedencias  on persona.idprocedencia=procedencias.id ";
//echo $sql;
echo "usted esta autenticado como".$_SESSION['correo'];

$resultado=$con->query($sql);
?>
<a href="cerrar.php">Cerrar Session</a>
<table>
	<th>Fotografia</th>
	<th>Nombres</th>
	<th>Apellidos</th>
	<th>Edad</th>
	<th>Sexo</th>
	<th>Procedencia</th>
	
	<th>Celular</th>
	<th>Estado</th>
	<th>Fecha</th>
	<th>Operaciones</th>
	<tr>
		<?php
		while ($fila=$resultado->fetch_assoc())
		{
			?>
		<tr>
		<td><img src="<?php echo 'images/'.$fila['fotografia'];?>" alt="" width="40">  </td>
		<td><?php echo $fila['nombre'];?> </td>
		<td><?php echo $fila['apellidos'];?></td>
		<td><?php echo $fila['edad'];?></td>
		<td><?php echo $fila['sexo'];?></td>
		<td><?php echo $fila['celular'];?></td>
		<td><?php echo $fila['procedencia'];?></td>
		<td><?php 
		switch ($fila['estado']) 
		{case "S":
			echo "Sano";
			break;
		case "I":
			echo "Infectado";
			break;
		case "O":
			echo "Sospechoso";
			break;
		case "P":	
			echo "Por Confirmar";
			break;
		case "R":
			echo "Recuperado";
		}	


		?></td>
		<td><?php echo $fila['fecha'];?></td>
		<td>
		<?php if ($_SESSION['nivel']==1)
		{?> 
		<a href="formeditar.php?id=<?php echo $fila['id'];?>"><img src="editar.png" width="10px">Editar</a>
		<a href="eliminar.php?id=<?php echo $fila['id'];?>"><img src="eliminar.png" width="10px">Eliminar</a>
		<?php }?>

	</td>
		</tr>
		<?php 
		}
		?>
	</tr>

</table>
<ul>
		<?php if ($_SESSION['nivel']==1)
		{?> 
	
	<li><a href="forminsertar.php">Insertar Persona</a></li>
<?php }?>
</ul>
</body>
</html>
