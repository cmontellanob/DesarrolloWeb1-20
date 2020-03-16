<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VocalesP</title>
</head>

<body>
Parte de HTML normal.
<BR><BR>
<?php 
/* Creo un array */ 
$las_vocales = array ('a','e','i','o','u'); 

/* Recorro el array utilizando foreach */

foreach ($las_vocales as $indice=>$elem) { 
echo $elem.' en el indice: '.$indice.'<br>'; 
} 

?>
</body>
</html>
