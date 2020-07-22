<?php include("cola.php");
session_start();
$_SESSION['cola']->insertar($_GET['valor']);

?>
<meta http-equiv="refresh" content="1;URL=menu.php">  
