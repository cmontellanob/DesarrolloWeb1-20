<?php
	require_once ('conexion.php');
	$nombreCliente = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$nombreFoto = $_FILES['foto']['name'];
	$foto = $_FILES['foto']['tmp_name'];
	$ruta = '../imagenes/'.$nombreFoto;
	$subirFoto = move_uploaded_file($foto, $ruta);
	$consulta = $pdo->prepare("INSERT INTO cliente(nombreCliente, descripcion, foto) VALUES (:nombreCliente, :descripcion, :foto)");
	$consulta->bindParam(':nombreCliente', $nombreCliente);
	$consulta->bindParam(':descripcion', $descripcion);
	$consulta->bindParam(':foto', $ruta);

	if ($consulta->execute()){
		echo "Datos Introducidos";
	}
	else{
		echo "Datos no introducidos";
	}
?>