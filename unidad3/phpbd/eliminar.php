<?php include("comprobar.php"); 
include("conexion.php");
$id=$_GET['id'];
$sql="select fotografia from persona where id=$id";
$resultado=$con->query($sql);
$fila=$resultado->fetch_assoc();
$archivo='images/'.$fila['fotografia'];
$sql="DELETE from persona where id=$id";
$resultado=$con->query($sql);
if (isset($archivo))
	unlink($archivo);

if ($resultado)
	echo "se elimino con exito";
else
	echo "hubo un error";
?>
<meta http-equiv="refresh" content="4;URL=listar.php">   
