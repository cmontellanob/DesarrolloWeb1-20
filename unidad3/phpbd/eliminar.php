<?php include("conexion.php");
$id=$_GET['id'];
$sql="DELETE from persona where id=$id";
$resultado=$con->query($sql);
if ($resultado)
	echo "se elimino con exito";
else
	echo "hubo un error";
?>
<meta http-equiv="refresh" content="4;URL=listar.php">   
