<?php include("conexion.php");
 
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
/// registrar en la bd

$sql="insert into person (nombre,apellido) values ('$nombre','$apellido')";
//echo $sql;
$resultado=$con->query($sql);
if ($resultado)
    {
      include('listar.php');

    }
else
	echo "hubo un error";


?>