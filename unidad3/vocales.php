<html xmlns="http://www.w3.org/1999/xhtml">
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
foreach ($las_vocales as $elem) { 
echo $elem.'<br>'; 
} 

print '<br>'; 

/* Es equivalente a realizar */ 
for ($i=0;$i<count($las_vocales);$i++) { 
echo $las_vocales[$i].'<br>'; 
}
?>
</body>
</html>
