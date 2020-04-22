<?php
$imagen = imagecreatefrompng("zend.png");
header("Content-Type: image/png");
imagepng($imagen);
?>
