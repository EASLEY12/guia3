<?php
include'./coneccion.php'; 

include'./SeccionControlador.php';
$SeccionA = new SeccionControlador();
 print $accion = $_REQUEST['accion'];
switch ($accion) {
 	case 'save':
 		if(isset($_REQUEST['bot'])){
 			$SeccionA->setId('NULL');
 			$SeccionA->setNombre($_REQUEST['nombre']);
 			$SeccionA->setEscuela($_REQUEST['escuela']);

 			$datosObj= array($SeccionA->getId(), 
 							$SeccionA->getNombre(),
 							$SeccionA->getEscuela()
 				);
 			print$SeccionA->guardarDatos($con,$datosObj);
 			print '<a href=\'manejadorSeccion.php?accion=con\'>ver datos</a>';	
 		}else{
 			print 'no se han enviado datos';
 		}
 		break;
 	case 'con':
 	$sql= 'SELECT * FROM seccion';
 	print consultaD($con,$sql,2,TRUE);
 	break;
 	case 'del':
 	$sql = 'DELETE from seccion where id='.$_REQUEST['id']. ';';
 	print consultaA($con,$sql);
 	break;

 	default:
 		print 'no hay accion que realizar';
 		break;
 } 

?>