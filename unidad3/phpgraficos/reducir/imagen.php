<html>
<body>
<form action="imagen.php" method="POST" enctype="multipart/form-data">
Elige un archivo de imagen jpg: <input type="file" name="fichero">
<input type="submit" name="Enviar" value="Enviar">
</form>
<?php
if (isset($_FILES["fichero"])) {
	echo "Imagen Original:<br>";
	$fotografia = $_FILES["fichero"]["tmp_name"];
	copy($fotografia,$_FILES["fichero"]["name"]);
	$foto_copia = $_FILES["fichero"]["name"]."&modo=original";
	$url = "clase_imagen.php?fotografia=$foto_copia";
	echo '<img src="'.$url.'">';
	echo "Imagen Miniatura:<br>";
	$foto_copia = $_FILES["fichero"]["name"]."&modo=miniatura";
	$url = "clase_imagen.php?fotografia=$foto_copia";
	echo '<img src="'.$url.'">';
}
?>
</body>
</html>