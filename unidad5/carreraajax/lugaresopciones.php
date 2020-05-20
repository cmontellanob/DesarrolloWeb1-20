<?php include("conexion.php");
$iddepartamento=$_GET['iddepartamento'];
$sql="select id,lugar from lugares where iddepartamento=".$iddepartamento;
$resultado=$con->query($sql);
$data=array();
while ($fila=$resultado->fetch_assoc())
{
    ?>
    <option value="<?php echo $fila['lugar']?>"><?php echo $fila['lugar'] ?>  </option>
<?php }
?>
       