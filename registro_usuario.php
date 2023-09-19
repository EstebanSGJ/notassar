<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="CSS/styleSAR.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>Añadir Usuario</title>
</head>
<style>
	form{
		text-align: center;
		border: 0px solid red;
	}
	table{
		width: 100% !important;
	}
	input, select{
		width: 50% !important;
	}
</style>
<body>
	<br>
	<form action="" method="GET" style="width: 100%;">
		<h5>Nuevo Usuario</h5><br>
		<table>
			<tr>
				<td>
					<label>Nombre</label>
				</td>
				<td>
					<input type="text" name="NombreU" required="true" />
				</td>
			</tr>
			<tr>
				<td>
					<label>Apellido Paterno</label>
				</td>
				<td>
					<input type="text" name="App_u" required="true"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Apellido Materno</label>
				</td>
				<td>
                <input type="text" name="Apm_u" required="true"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Tipo</label>
				</td>
				<td>
					<input type="text" name="Tipo" required="true"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Area</label>		
				</td>
				<td>
					<input type="text" name="Area" required="true" />
				</td>
			</tr>
			<tr>
				<td>
					<label>Correo electrónico</label>
				</td>
				<td>
					<input type="text" name="Correo" id="Correo" required="true" />
				</td>
			</tr>
			<tr>
				<td>
					<label>Contraseña</label>
				</td>
				<td>
                <input type="password" id="contrasena" name="Contrasena" requerid="true"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Empresa</label>		
				</td>
				<td>
                <input type="text" name="Empresa" required="true" />
				</td>
			</tr>
			
			<tr>
				<td colspan="11">
					<br>
					<input type="sumit" value="Añadir usuario" name="Registrar">
				
					<a href=index.php class="Aceptar">Salir</a>
				</td>
			</tr>
		</table>
	</form>
</body>
<script>

</script>
</html>