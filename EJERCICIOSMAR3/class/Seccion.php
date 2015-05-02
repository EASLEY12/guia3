<?php

class d {
	private $id;
	private $nombre;
	private $escuela;
public function setId($id){
		$this->id = $id;
}
public function getId() {
		return $this->id;
	
	}

	public function setNombre($nombre){
		$this->nombre= $nombre;
	}

public function getNombre(){
		return $this->nombre;
	}
public function setEscuela($escuela){
		$this->escuela = $escuela;
	}
public function getEscuela(){
		return $this->escuela;
	}

}
?>