<?php
class imagen
{
private $archivo;
	private $imagen;
	private $dimensiones;
	function __construct($archivo)
	{
		$this->archivo = $archivo;
		$this->imagen = imagecreatefromjpeg($archivo);
		$this->dimensiones = getimagesize($archivo);
	}
	public function imagen_original()
	{
		header("Content-Type: image/jpeg");
		imagejpeg($this->imagen);
	}
	public function imagen_miniatura()
	{
		$dimensionx = $this->dimensiones[0] /2;
		$dimensiony = $this->dimensiones[1] /2;
		$this->miniatura = imagecreatetruecolor($dimensionx,$dimensiony);
		imagecopyresampled($this->miniatura, $this->imagen, 0, 0, 0, 0, $dimensionx, $dimensiony, $this->dimensiones[0], $this->dimensiones[1]);
		header("Content-Type: image/jpeg");
		imagejpeg($this->miniatura);	
	}
}
if (isset($_GET["fotografia"])) {
	$fotografia = new imagen($_GET["fotografia"]);
	if ($_GET["modo"]=="original") {
		$fotografia->imagen_original();
	} else {
		$fotografia->imagen_miniatura();
	}
}
$ima= new imagen($_GET["fotografia"]);
?>
