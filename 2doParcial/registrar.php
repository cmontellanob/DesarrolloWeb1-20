<?php  
include("conexion.php");
$fecha=$_POST['fecha'];
$titulo=$_POST['titulo'];
$texto=$_POST['texto'];

$sql="insert into noticias (fecha,titulo,texto) value ('$fecha','$titulo','$texto')";

echo $sql;
$resultado=$con->query($sql);
if ($resultado)
	echo "se inserto con exito";
else
	echo "hubo un error";
?>

