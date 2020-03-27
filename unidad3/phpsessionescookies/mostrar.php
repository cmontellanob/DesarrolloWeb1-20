<?php include("pila.php");
session_start();
echo $_SESSION['p']->mostrar();
?>
<a href="menu.php">volver</a>