
<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
</head>
<body>
	<?php
		function verificacion($usu,$cla){
			$ingUsuario = $_REQUEST['usuario'];
			if ($usu==$ingUsuario) {
				$nom = strtoupper($ingUsuario);
				echo "bienvenido " . $nom;
			}
		}
	?>
</body>
</html>

<?php
	
	verificacion('bryan','123');

	$usuarios = array(
		'bryan' => '123',
		'maria' => '1234',
		'david' => '12345',
		'marta' => '4321',
		'raul' =>  '321'
		 );
/**
 * Crear un arreglo asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder a cada componente por su nombre.
 El arreglo debe tener el formato
 [
    'juan' => 'contrasena_segura'
 ]
 Crear un formulario que permita ingresar el nombre de usuario y la contraseña. 
 Al enviar el formulario se debe validar que la combinación de nombre de usuario y contraseña existan en el arreglo.
 Si los datos no son correctos imprimir un mensaje de error.
 Si los datos son correctos debe redirigir a otra página bienvenido.php que debe imprimir el mensaje "Bienvendo JUAN". (con el nombre de usuario en mayúsculas)
 */

?>