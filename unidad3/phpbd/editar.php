<?php include("conexion.php");
$id=$_POST['id'];
$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApellido'];
$edad=$_POST['numEdad'];
$sexo=$_POST['txtSexo'];
$celular=$_POST['numCelular'];
$estado=$_POST['selEstado'];
$fecha=$_POST['fecRegistro'];
$sql="update persona set nombre='$nombre',apellidos='$apellido',edad=$edad,sexo='$sexo',celular=$celular,estado='$estado',fecha='$fecha' where id=".$id;
//echo $sql;
$resultado=$con->query($sql);
if ($resultado)
	echo "se edito con exito";
else
	echo "hubo un error";
?>
<meta http-equiv="refresh" content="4;URL=listar.php">   

