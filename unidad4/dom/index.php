
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
<script>
	function cambiar()
	{
		var selNivel=document.getElementById('nivel');
		var	selColegio=document.getElementById('colegio');
		if (selNivel.value==2)
		{
			selColegio.style.display='none';
		}
		else
		{
           selColegio.style.display='block';
		}
	}
</script>
</head>
<body>
	<form action="crudDB/registrar.php" method="POST">

		<select name="nivel" id="nivel" onchange="cambiar()">
			<option value="1">Estudiate</option>
			<option value="2">Profesional</option>
		</select><br><br>
		<select name="colegio" id="colegio">
			<option value="particular">Particular</option>
			<option value="fiscal">Fiscal</option>
		</select><br><br>
		<label>Nombre:</label>
		<input type="text" name="nombre" required=""><br><br>
		<label>Apellidos:</label>
		<input type="text" name="apellidos" required=""><br><br>
		<label>Telefono:</label>
		<input type="text" name="telefono" required=""><br><br>
		<label>E-mail</label>
		<input type="text" name="correo" required=""><br><br>
		<input type="submit" name="registrar" value="Registrar">
	</form>
	
</body>
</html>
