<?php 
$sql2="select nombre,apellido from person";
        $resultado2=$con->query($sql2);
        ?>
        <table>
        <tr>
            <th>nombre</th>
            <th>apellido</th>
            </tr> 
        <?php
		while ($fila=$resultado2->fetch_assoc())
		{
			?>
		<tr>
		<td><?php echo $fila['nombre'];?> </td>
		<td><?php echo $fila['apellido'];?></td>
        <?php }?>    
        </table>
