<?php session_start();
$correo=str_replace("'","",$_POST['txtCorreo']);
echo $_POST['txtCorreo'];
$password=sha1($_POST['txtPassword']);
include('conexion.php');
$sql="select nombrecompleto,correo,nivel from usuarios where correo='$correo' and password='$password'";
//echo $sql;
 $resultado=$con->query($sql);
 if ($fila=$resultado->fetch_assoc())
 {

 	echo 'se logue con éxito';
 	echo '<div id="user">'.$fila['nombrecompleto'].'</div>   ';
 	echo '<div id="niv">'.$fila['nivel'].'</div>   ';
 	
 	$_SESSION['correo']=$correo;
 	$_SESSION['nivel']=$fila['nivel'];
 }
 else
   {
   	echo "Usuario o Contraseña novalidos"; 
  } 
  ?>
