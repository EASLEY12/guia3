<html>
	<head>
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
	<script src="./libs/jquery-2.1.0.js"></script>
	<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
	<script src="./libs/validacion/jquery.validate.min.js"></script>
	<script src="./libs/validacion/messages.js"></script>
	<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	<head>
	<body>
<?php
include './coneccion.php';
include 'AlumnoControlador.php';
$AlumnoA = new AlumnoControlador();

if(isset($_REQUEST['bot'])){
		$AlumnoA->setId($_REQUEST['id']);
		$AlumnoA->setNombre($_REQUEST['nombre']);
		$AlumnoA->setApellido($_REQUEST['apellido']);
		$AlumnoA->setCarnet($_REQUEST['carnet']);
		$AlumnoA->setDir($_REQUEST['dir']);
		$AlumnoA->setFechaNac($_REQUEST['Fecha_nac']);
		$AlumnoA->setSeccion($_REQUEST['seccion']);
		$datosObj=array($AlumnoA->getId(),
						$AlumnoA->getNombre(),
						$AlumnoA->getApellido(),
						$AlumnoA->getFechaNac(),
						$AlumnoA->getDir(),
						$AlumnoA->getCarnet(),
						$AlumnoA->getSeccion());	
			print "<div id='dialogo' title='Exito' style='display': none;'>";
			print '<p>Mensaje: ';
			print $AlumnoA->modificarDatos($con,$datosObj);
			print '<span class="badge glyphicon glyphicon-ok"></span></p>';
			print '<a href=\'manejadorAlumno.php?accion=con\'>Ver datos</a>';
			print "</div>";
}
?>
<script >
	$(document).ready(function(){
		$("#dialogo").dialog();
	});
</script>
</body>
</html>