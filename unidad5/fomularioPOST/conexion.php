<?php
$con =new mysqli("localhost", "root", "","bd_ajax");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);

?> 