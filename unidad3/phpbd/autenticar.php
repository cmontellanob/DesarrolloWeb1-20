<?php session_start();
$correo=str_replace("'","",$_POST['txtCorreo']);
$password=sha1(str_replace("'","",$$_POST['txtPassword']);
include('conexion.php');
$sql="select correo,nivel from usuarios where correo='$correo' and password='$password'";
echo $sql;
 $resultado=$con->query($sql);
 if ($fila=$resultado->fetch_assoc())
 {
 	echo "Es  usuario correcto";
 	$_SESSION['correo']=$correo;
 	$_SESSION['nivel']=$fila['nivel'];
 	
   header("Location: listar.php");
 }
 else
   {
   	echo "Usuario o Contraseña novalidos"; ?>
   <meta http-equiv="refresh" content="3;URL=login.html">   

   <?php } ?>
 	
