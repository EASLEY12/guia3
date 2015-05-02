<?php
class Alumno {
	private $Id;
	private $Nombre;
	private $Apellido;
	private $FechaNac;
	private $Carnet;
	private $Dir;
	private $Seccion;

public function getId() {
	return $this->Id;
}

public function setId($Id) {
	$this->Id = $Id;
}

public function getNombre() {
	return $this->Nombre;
}
public function setNombre($Nombre) {
	$this->Nombre = $Nombre;
}

public function getApellido() {
	return $this->Apellido;
}
public function setApellido($Apellido) {
	$this->Apellido = $Apellido;
}

public function getCarnet() {
	return $this->Carnet;
}
public function setCarnet ($Carnet){
	$this->Carnet = $Carnet;
}
public function getDir() {
	return $this->Dir;
}
public function setDir($Dir) {
	$this->Dir = $Dir;
}


public function getFechaNac() {
	return $this->fecha;
}
public function setFechaNac($FechaNac) {
	$this->fecha = $FechaNac;
}



public function getSeccion(){
	return $this->Seccion;
}

public function setSeccion($Seccion){
	$this->Seccion = $Seccion;
}

}


?>