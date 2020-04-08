<?php  include("comprobar.php");
include("comprobaradministrador.php");
include("conexion.php");
$sql="select id,procedencia from procedencias";
$resultado=$con->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Insertar Datos</title>
</head>
<body>
	<form action="insertar.php" method="POST" enctype="multipart/form-data">
	<label for="imgFotografia">Fotografia<br>
	<input type="file" name="imgFotografia"> <br>
	<label for="txtNombre">Nombre</label>
	<input type="text" name="txtNombre"> <br>

	<label for="txtApellido">Apellido</label>
	<input type="text" name="txtApellido"> <br>
	<label for="numEdad">Edad</label>
	<input type="number" name="numEdad"> <br>
	<label for="txtSexo">Sexo</label>
	<input type="radio" name="txtSexo" value="M">Mascuino 	
	<input type="radio" name="txtSexo" value="F">Femenino <br>
	<label for="selProcedencia">Procedencia</label>
	<select name="selProcedencia" >
		<?php
		while ($fila=$resultado->fetch_assoc())
		{
			?> 
		<option value="<?php echo $fila['id']; ?>"> <?php echo $fila['procedencia']; ?></option>
		<?php } ?>
	</select> <br>


	<label for="numCelular">Celular</label>
	<input type="number" name="numCelular"> <br>
	<label for="selEstado">Estado de Salud(Referente a COVI-19)</label>
	<select name="selEstado" >
		<option value="S">Sano</option>
		<option value="I">Infectado</option>
		<option value="O">Sospechoso</option>
		<option value="P">Por Confirmar</option>
		<option value="R">Recuperado</option>
	</select> <br>
	<label for="fecRegistro">Fecha de Registro </label>

	<input type="date" name="fecRegistro">
	<input type="submit" value="Registrar">
</form>

</body>
</html>

