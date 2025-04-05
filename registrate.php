<?php 

session_start();

	// Comprobamos si ya tiene una sesion
# Si ya tiene una sesion redirigimos al contenido, para que no pueda volver a registrar un usuario.
if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
	die();
}

	// Comprobamos si ya han sido enviado los datos
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Validamos que los datos hayan sido rellenados
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	// // Tambien podemos limpiar mediante las funciones
	// 	# El problema es que si lo hacemos de esta forma no estamos eliminando caracteres especiales, solo los transformamos.
	
	// 	// La funcion htmlspecialchars() convierte caracteres especiales en entidades HTML, (&, "", '', <, >)
	// 	$usuario = htmlspecialchars($_POST['usuario']);
	// 	// La funcion trim() elimina espacio en blanco al inicio y final de la cadena de texo
	// 	$usuario = trim($usuario);
	// 	// stripslashes() quita las barras de un string con comillas escapadas, los \ los convierte en \'
	// 	$usuario = stripslashes($usuario);

	$errores = '';
	
	// Comprobamos que ninguno de los campos este vacio.
	if (empty($usuario) or empty($password) or empty($password2)) {
		$errores = '<li>Por favor rellena todos los datos correctamente</li>';
	} else {

		// Comprobamos que el usuario no exista ya.
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=curso', 'root', '');
		} catch (PDOException $e) {
			echo "Error:" . $e->getMessage();
		}

		//verifica que no exixta el usuario 
		$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));

		// El metodo fetch nos va a devolver el resultado o false en caso de que no haya resultado.
		$resultado = $statement->fetch();

		// Si resultado es diferente a false entonces significa que ya existe el usuario.
		if ($resultado != false) {
			$errores .= '<li>El nombre de usuario ya existe</li>';
		}

		/*este metodo es el mas reciente que hay para hash y modifica un poco el como validar las
		  contraseñas almasenadas y escritas en varios campos*/

		  $password = password_hash($password, PASSWORD_DEFAULT);

		  //esta linia sirve para validar que es la misma contraseña en el otro campo 
		  if (password_verify($password2, $password) != true) {
		  	$errores.= '<li>Las contraseñas no son iguales</li>';
		  }

		
		/* Hasheamos nuestra contraseña para protegerla un poco.
		# OJO: La seguridad es un tema muy complejo, aqui solo estamos haciendo un hash de la contraseña,
		# pero esto no asegura por completo la informacion encriptada.
		$password = este metodo es posterior hash('sha512', $password);
		$pasword2=  este metodo es posterior hash('sha512', $password2);

		// Comprobamos que las contraseñas sean iguales.
		if ( $contraseña != $contraseña2) {
			$errores.= '<li>Las contraseñas no son iguales</li>';
		}*/
	}

	// Comprobamos si hay errores, sino entonces agregamos el usuario y redirigimos.
	//los nobres deven ser identicos a los de la base
	if ( ! $errores) {
		$statement = $conexion->prepare('INSERT INTO usuarios (id, usuario, pass) VALUES (null, :usuario, :pass)');
		$statement->execute(array(
				':usuario' => $usuario,
				':pass' => $password
			));

		// Despues de registrar al usuario redirigimos para que inicie sesion.
		header('Location: login.php');
	}


}

require 'vistas/registrate.view.php';
	

 ?>