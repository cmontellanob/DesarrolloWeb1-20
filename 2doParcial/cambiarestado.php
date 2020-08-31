<?php  
include("conexion.php");
$id=$_POST['id'];
$nivel=$_POST['nivel'];

$sql="update usuarios set nivel=$nivel  where id=".$id;

echo $sql;
$resultado=$con->query($sql);
if ($resultado)
	echo "se edito con exito";
else
	echo "hubo un error";
?>

