<?php include("pila.php");
session_start();
$valor=$_GET['valor'];
$_SESSION['p']->insertar($valor);
?>
Se inserto con exito
<meta http-equiv="refresh" content="3;URL=menu.php">   
