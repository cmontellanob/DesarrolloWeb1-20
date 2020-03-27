<?php include("pila.php");
session_start(); 
echo "El valor eliminado es ".$_SESSION['p']->eliminar();
?>
<meta http-equiv="refresh" content="3;URL=menu.php">   
