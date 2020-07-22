<?php include("conexion.php");
$numero=$_POST['numero'];
for ($i=1; $i <= $numero; $i++) 
{

$nombres=$_POST['nombres'.$i];
$apellidos=$_POST['apellidos'.$i];
$sexo=$_POST['sexo'.$i];
$mesa=$_POST['mesa'.$i];
$sql="insert into pacientes (nombres,apellidos,sexo,mesa) values ('$nombres','$apellidos','$sexo',$mesa)";
echo $sql;
$resultado=$con->query($sql);
if ($resultado)
	echo "se registro con exito";
else
	echo "hubo un error";

}
header("listar.php");
?>
