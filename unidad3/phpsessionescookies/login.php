<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loguerse</title>
</head>
<body>
	<form action="autenticar.php" method="POST">
		<label for="login">Usuario</label>
		<input type="text" name="login" value="<?php 
		if (isset($_COOKIE['usuario'])) echo $_COOKIE['usuario']; 
		?>"><br>
		<label for="password">Constraseña</label>
		<input type="password" name="password"><br>
		<input type="checkbox" name="cbRecordarUsuario" <?php 
		if (isset($_COOKIE['usuario'])) echo "checked"; ?> >recordar usuario <br>	
		<input type="submit" value="Enviar">
	</form>
</body>
</html>