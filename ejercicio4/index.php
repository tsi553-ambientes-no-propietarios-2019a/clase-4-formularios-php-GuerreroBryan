

<!DOCTYPE html>
<html>
<head>
	<title>Registro de Usuario</title>
</head>
<body>
	<form action="validarRegistro.php" method="post">
		<div align="center">
			<h1>Ingrese un usuario y una contraseña</h1>
			<label>Usuario: </label>
			<input type="text" name="usuario1" required="required"><br>
			<label>Clave : </label>
			<input type="password" name="clave1" required="required"><br>
			<label>Repita la Clave : </label>
			<input type="password" name="clave2" required="required"><br>
			<input type="submit" name="ingresar">
		</div>
	</form>
</body>
</html>
<?php
/**
 * Problema Propuesto:
 * Desarrollar un formulario que simule el registro de un usuario (archivo index.php). 
 * El formulario debe solicitar el nombre de usuario y la clave en dos oportunidades. 
 * El formulario debe ser procesado por el archivo validarRegistro.php. Este archivo
 * debe implementar una función que permita validar si las dos contraseñas coinciden. 
 * Si las contraseñas coinciden, se debe redirigir al archivo "registroCorrecto.php"
 * Si las contraseñas no coinciden, se debe redirigir al index.php y mostrar el mensaje
 * "Las contrseñas no coinciden".
 */
?>