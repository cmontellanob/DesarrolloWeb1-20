<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calendario</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<?php 
	$mes=$_GET['mes'];
	$anio=$_GET['anio'];
	$nrodias = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);
	$diasemana=jddayofweek ( cal_to_jd(CAL_GREGORIAN, $mes,1, $anio) , 1 );
	$meses=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	//echo $diasemana;
	switch ($diasemana) {
		case 'Monday':
			$empieza=1;
			break;
		case 'Tuesday': 
			$empieza=2;
			break;
		case 'Wednesday':
			$empieza=3;
			break;
		case 'Thursday':
			$empieza=4;
			break;
		case 'Friday':
			$empieza=5;
			break;
		case 'Saturday':
			$empieza=6;
			break;
		case 'Sunday':
			$empieza=7;
			break;


		
		default:
			# code...
			break;
	}

	?>
	<h4>Año:<?php echo $anio?></h4>
	<h5>Mes;<?php echo $meses[$mes-1]?></h5>
	<table class="calendario" width="100%" >
		<tr>
			<th>Lunes</th>
			<th>Martes</th>
			<th>Miercoles</th>
			<th>Jueves</th>
			<th>Viernes</th>
			<th>Sabado</th>
			<th>Domingo</th>

		</tr>
		<?php 
			$dias=1;

		   for ($i=1;$i<=5;$i++)
		   {
		   	echo "<tr>";
		   	for ($j=1; $j <=7 ; $j++) {
		   		if ($i%2==0)	
		   		echo '<td class="par" >';
		   	    else
		   	    echo '<td class="impar" >';

		   		if ($dias==1)
		   		{
		   			if ($j==$empieza)
		   				{
		   				echo $dias;
		   				$dias++;
		   				}
		   				else
		   				{
		   				echo "&nbsp;";		
		   				}		
		   		}

		   		else if ($dias<=$nrodias)
		   		{
		   			echo $dias;
		   			$dias++;
		   		}
		   		    else
		   			echo "&nbsp;";
		   		echo "</td>";
						   	
		   	}
		   	echo "</tr>";

		   }
		 ?>  
	</table>

	
</body>
</html>