<?php include("pila.php");
session_start(); 
echo $_SESSION['p']->eliminar();
?>
<meta http-equiv="refresh" content="5;URL=menu.php">   
