<?php session_start();
include("cola.php");
$_SESSION['cola']=new Cola($_GET['tamano']);
header("menu.php");
?>
<meta http-equiv="refresh" content="1;URL=menu.php">  