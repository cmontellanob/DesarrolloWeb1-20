<html>
<head>
	
</head>	

<body>
	<table border="1">
	<?php echo " tabla del 5";
	$suma=0;
	
	for ($i=1;$i<11;$i++)
	{
		echo "<tr>";
		$suma=5+$i;
		echo "<td>5</td><td>+</td><td>".$i."</td><td>=</td><td>".$suma."</td>";
		echo "</tr>";
	}
	
	?>
	</table>
</body>
</html>