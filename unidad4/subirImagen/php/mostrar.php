<?php
	require_once ('conexion.php');
	$consulta = $pdo->prepare("SELECT * FROM cliente");
	$consulta->execute();
	if ($consulta->rowCount() >= 1) {
		while ($fila = $consulta->fetch()) {
			echo $fila['nombreCliente']."<br>";
			?>
			<a href="descripcion.php?id=<?php echo $fila['id']; ?>"><img src="<?php echo $fila['foto']; ?> " alt=""></a>
		<?php 
		}
	}
?>