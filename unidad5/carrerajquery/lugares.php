<?php include("conexion.php");
$iddepartamento=$_GET['iddepartamento'];
$sql="select id,lugar from lugares where iddepartamento=".$iddepartamento;
$resultado=$con->query($sql);
$data=array();
while ($fila=$resultado->fetch_assoc())
{
  $data[]=$fila;
}
  //var_dump($data);  
  echo json_encode($data);
?>
       