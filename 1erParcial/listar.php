<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Jurados</title>
</head>
<body>
	
<?php include("conexion.php");

$sql="select nombres,apellidos,sexo,mesa  from pacientes";

$resultado=$con->query($sql);
?>
<table with="100%">
	<tr style="color: white;background-color:#ED7D31 ">
	<th >Nombres</th>
	<th>Apellidos</th>
	<th>Sexo</th>
	<th>Mesa</th>	
	</tr>

		<?php $o=0;
		while ($fila=$resultado->fetch_assoc())
		{
			?>
		<tr style="background-color:<?php 
				if ($o%2==0) 
				echo "#FBE4D5";
				else 
				echo "white"; 
			    ?>">
		<td><?php echo $fila['nombres'];?> </td>
		<td><?php echo $fila['apellidos'];?></td>
		<td><?php switch ($fila['sexo']) 
		{case "M":
			echo "Masculino";
			break;
		case "F":
			echo "Femenino";
			break;
		}?></td>
		<td><?php echo $fila['mesa'];?></td>
		</tr>	
		<?php 
		$o++;
		}
		?>
	</table>
</body>
</html>
