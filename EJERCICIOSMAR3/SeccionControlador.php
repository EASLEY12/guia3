<?php
include './class/Seccion.php';
class SeccionControlador extends d {
	
	 public function guardarDatos($con,$objSeccion) {
		$variableSql = "INSERT INTO seccion ";
		$variableSql .="(id,nombre,escuela)";
		$variableSql .= "VALUES (";
		$variableSql .= "'".$objSeccion[0]."',";
		$variableSql .= "'".$objSeccion[1]."',";
		$variableSql .= "'".$objSeccion[2]."');";
		return consultaA($con,$variableSql);
	}
}
?>