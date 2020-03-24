<html>
	<body>
		<?php 
		function fibonaci($n)
		{
			if ($n==0)
				return 0;
			else if ($n==1)
				return 1;
			else
			    return fibonaci($n-2)+fibonaci($n-1);	
		}
		$n=$_POST['n'];
		echo "Fibonaci de".$n."es".fibonaci($n);
		?>

	</body>
</html>