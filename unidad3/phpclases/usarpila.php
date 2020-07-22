<?php include("pila.php");
$p=new pila();
$p->insertar("hola");
$p->insertar("buenas");
$p->insertar("tardes");
$p->mostrar();
echo "Elemento eliminado=".$p->eliminar()."<br>";
$p->mostrar();

?>
<meta http-equiv="refresh" content="5;URL=menu.php">  