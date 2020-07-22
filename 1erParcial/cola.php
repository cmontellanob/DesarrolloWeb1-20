<?php 
class cola
{
	private $elementos=array();
	private $final;
	private $frente;
	private $tamano;
	function __construct($tamano)
	{
		$this->tamano=$tamano;
		$this->frente=0;
		$this->final=0;

	}
	public function insertar($elemento)
	{
		$this->elementos[$this->final]=$elemento;
		$this->final++;
	}
	public function eliminar()
	{
		if ($this->frente==$this->final)
			echo "la cola esta vacia";
		else	
			{   $this->frente++;
				return $this->elementos[$this->frente-1];
			}
	}
	public function mostrar()
	{
		for ($i=$this->frente;$i<$this->final;$i++)
			echo $this->elementos[$i]."<br/>";
	}
}
?>