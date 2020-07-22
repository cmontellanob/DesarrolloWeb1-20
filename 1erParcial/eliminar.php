<?php include("cola.php");
session_start();
echo $_SESSION['cola']->eliminar();
?>

<meta http-equiv="refresh" content="3;URL=menu.php">  