<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="insertarbd.php" method="POST">
	<table>
		<tr>
			<th>
				nombre
			</th>
			<th>
				apellido
			</th>
			<th> 
				 sexo
			 </th>
			 <th>
			 	  mesa
			 </th>
		</tr>
	<?php $numero=$_GET['numero'];

	for ($i=1; $i <= $numero ; $i++) { 
			?>
			<tr>
			<td><input type="text" name="nombres<?php echo $i ?>"> </td>
			<td><input type="text" name="apellidos<?php echo $i ?>"> </td>
 			<td><input type="radio" name="sexo<?php echo $i ?>" value="M">masculino
				<input type="radio" name="sexo<?php echo $i ?>" value="F">femenino
 			 </td>
 			<td><input type="text" name="mesa<?php echo $i ?>"> </td>
			</tr>
	<?php
		}	
 	?>

	</table>
	<input type="hidden" name="numero" value="<?php echo $numero ?>">
	<input type="submit" value="registrar">
</form>

	
</body>
</html>
