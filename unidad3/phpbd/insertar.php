<?php include("comprobar.php");
include("conexion.php");

$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApellido'];
$edad=$_POST['numEdad'];
$sexo=$_POST['txtSexo'];
$idprocedencia=$_POST['selProcedencia'];
$celular=$_POST['numCelular'];
$estado=$_POST['selEstado'];
$fecha=$_POST['fecRegistro'];
$separado=explode(".",$_FILES['imgFotografia']['name']);
$extension=$separado[1];
$fotografia=$celular.".".$extension;
$sql="insert into persona (fotografia,nombre,apellidos,edad,sexo,idprocedencia,celular,estado,fecha) values ('$fotografia','$nombre','$apellido',$edad,'$sexo','$idprocedencia',$celular,'$estado','$fecha')";
echo $sql;
$resultado=$con->query($sql);
copy($_FILES['imgFotografia']['tmp_name'],'images/'.$fotografia);
if ($resultado)
	echo "se registro con exito";
else
	echo "hubo un error";
?>
<meta http-equiv="refresh" content="3;URL=listar.php">   

