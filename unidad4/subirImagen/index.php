<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="php/registrarse.php" method="POST" accept="image/*" enctype="multipart/form-data">
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" id="nombre"><br><br>
		<textarea name="descripcion" id="descripcion"></textarea><br><br>
		<label for="foto">Foto:</label>
		<input type="file" name="foto" id="foto"><br><br>
		<input type="submit" name="registrarse" id="registrarse">
	</form>
</body>
</html>