<html>
	<head>
		<meta charset="utf-8">
		<TITLE>Captura de datos</title>
	</head>
	<body>
		<table >
		<form action="manejadorAlumno.php" method="post">
			<tr>
				<td>Carnet:
				</td>
				<td>
					<input name="carnet">
				</td>
				<TR>
					<td>Nombre:
				</td>
				<td>
					<input name="NOMBRE">
				</td>
				<TR>
				<td>APELLIDO:
				</td>
				<td>
					<input name="APELLIDO">
				</td>
				<TR>
				<td>FECHA DE NACIMIENTO:
				</td>
				<td>
					<input name="NACIMIENTO">
				</td>	
				<TR>
				<td>DIRECCION:
				</td>
				<td>
					<input name="DIRECCION">
				</td>	
				</TR>
				<td>SECCION:
				</td>
				<td> <select name="Seccion">
				<option value=""></option>
				<option value="sistemas">sistemas</option>
				<option value = "mantenimiento">mantenimiento</option>
				</select>
				</td>
				<TR>
				<td colspan="2"> 
					<input type="submit" name="bot" value="enviar">
				</td>	
				</TR>	
				</TR>
				</TR>
				</TR>	
				</TR>
			</TR>
			</tr>
		</TABLE>
		</form>
	</body>
</html>