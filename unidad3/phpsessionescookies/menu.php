<?php include("pila.php");
session_start();
if (!isset($_SESSION['p']))
    $_SESSION['p']=new pila();
?>
	<ul>
		<li><a href="insertar.php">Insertar</a></li>
		<li><a href="eliminar.php">Eliminar</a></li>
		<li><a href="mostrar.php">Mostrar</a></li>
	</ul>
</body>
</html>