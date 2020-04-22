<?php include('comprobar.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Personas relacionadas al Coronavirus</title>
</head>
<body>
	

<?php include("conexion.php");
$orden=$_GET['orden'];
$forma=$_GET['forma'];
if (!isset($_GET['orden']))
{
	$orden="id";
	$forma="";
}
$sql="select persona.id,fotografia,nombre,apellidos,edad,sexo,procedencia,celular,estado,fecha from persona left join procedencias  on persona.idprocedencia=procedencias.id  order by ".$orden." ".$forma;
if ($forma=="")
   $forma="desc";
   else
   $forma="";	

//echo $sql;
echo "usted esta autenticado como".$_SESSION['correo'];

$resultado=$con->query($sql);
?>
<a href="cerrar.php">Cerrar Session</a>
<table>
	<th>Fotografia</th>
	<th><a href="listar.php?orden=nombre&forma=<?php if ($orden=="nombre") echo $forma;?>">Nombres</a></th>
	<th><a href="listar.php?orden=apellidos&forma=<?php if ($orden=="apellidos") echo $forma;?>">Apellidos</a></th>
	<th><a href="listar.php?orden=edad&forma=<?php if ($orden=="edad") echo $forma;?>">Edad</a></th>
	<th><a href="listar.php?orden=sexo&forma=<?php if ($orden=="sexo") echo $forma;?>">Sexo</a></th>
	
	<th><a href="listar.php?orden=celular&forma=<?php  if ($orden=="celular") echo $forma;?>">Celular</a></th>
	<th><a href="listar.php?orden=procedencia&forma=<?php if ($orden=="procedencia") echo $forma;?>">Procedencia</a></th>
	
	<th><a href="listar.php?orden=estado&forma=<?php if ($orden=="estado") echo $forma;?>">Estado</a></th>
	<th><a href="listar.php?orden=fecha&forma=<?php if ($orden=="fecha") echo $forma;?>">Fecha</a></th>
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
