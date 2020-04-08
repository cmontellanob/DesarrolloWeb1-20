<?php session_start();
if (($_SESSION['nivel']!=1))
{
	 header("Location: mensajenoautorizado.html"); 
	} 
?>
