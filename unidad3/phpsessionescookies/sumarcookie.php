<?php
$n=$_COOKIE['n']; //leer una cookie
$suma=0;
for ($i=0;$i<$n;$i++)
{
    $suma=$suma+$_POST['x'.$i];
}

echo "el valor dela suma es".$suma; ?>