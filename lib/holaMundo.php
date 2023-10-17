<?php
class HolaMundo{
	private $nombre;
	function _construct($nombre){
		$this->nombre = nombre;
	}
	function _toString(){
		return sprintf("Hola, $s. \n", $this->nombre);
	}
}
?>
