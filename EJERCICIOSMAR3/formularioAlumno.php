<?php include './coneccion.php';?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<TITLE>Captura de datos</title>
		<link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
		<script src="./libs/jquery-2.1.0.js"></script>
		<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
		<script src="./libs/validacion/jquery.validate.min.js"></script>
		<script src="./libs/validacion/messages.js"></script>
		<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	</head>
	<body>
	<div class="jumbotron">

		<form action="manejadorAlumno.php?accion=save" method="post" id="alumno">
			<table class="table-bordered">
			<div class="row">
			<div class="col-xs-2">
				Carnet:
			</div>
				<div class="col-xs-2">
					<input type="text" name="carnet" class="required digits form-control">
				</div>
			</div>
			<div class="row">
			<div class="col-xs-2">
					Nombre:
			</div>
			<div class="col-xs-2">
					<input type="text" name="NOMBRE" class="required form-control">
			</div>
			</div>
			<div class="row">
			<div class="col-xs-2">	
				APELLIDO:
			</div>
				<div class="col-xs-2">	
					<input type="text" name="APELLIDO" class="required form-control">
				</div>
				</div>
			<div class="row">
			<div class="col-xs-2">
				FECHA DE NACIMIENTO:
				</div>
				<div class="col-xs-2">
				<div class="input-group">
					<input type="text" name="NACIMIENTO" id="fechac" class="required form-control">
			<span id="fechac" class=" input-group-addon glyphicon glyphicon-calendar"></span>
			</div>
			</div>
			</div>

				<div class="row">
			<div class="col-xs-2">
			DIRECCION:
				</div>
			<div class="col-xs-2">
					<input type="text" name="DIRECCION" class="required form-control" >
			</div>		
			</div>



			<div class="row">
			<div class="col-xs-2">
				SECCION:
				</div>
				<div class="col-xs-2">
			 <select name='seccion' class="required form-control">
				<option value=""></option>
				<?php
				$sql = "SELECT id,nombre FROM seccion;";
				$datos = consultaD($con,$sql);
				foreach ($datos as $value) {
					Print "<option value= '";
					print $value['id'];
					Print"'>";
					Print $value['nombre'];
					print"</option>";
				}
				?>
				</select>
				</div>
				</div>
				<div class="row">
				<td colspan="2"> 
				<input type="submit" name="bot" value="enviar" class="btn btn-prymary">
				</div>
				</div>

		</TABLE>

		</form>
		</div>
		<script type="text/javascript">
		$().ready(function(){
			$("#alumno").validate({});
		});
		$(document).ready(
			function(){
				$("#fechac").datepicker(
					{
						changeMonth: true,
						changeYear: true,
						dateFormat: 'yy-mm-dd',
						showAnim: 'slide'
					}
				);
			}
		)
		</script>
	</body>
</html>