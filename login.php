<?php 

session_start();

// Comprobamos si ya tiene una sesion
# Si ya tiene una sesion redirigimos al contenido, para que no pueda acceder al formulario
if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
	die();
}

// Comprobamos si ya han sido enviado los datos
//strtlower es minusculas
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	/*estalinia era con el anterio metodo de hash
	$contra = hash('sha512', $password); se puede omitir */

	// Nos conectamos a la base de datos
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=curso', 'root', '');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();

	}
		
	/*$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password');
	$statement->execute(array(
			':usuario' => $usuario,
			':password' => $password
		));*/

	$statement = $conexion -> prepare('SELECT * FROM usuarios WHERE usuario = :usuario');
	$statement -> execute(array(':usuario' => $usuario));
	
/* Apartir de aqui es el nuevo metodo para validar la contraseña */
	$resultado = $statement->fetch();
	
	if ($resultado !== false) {
		 if (password_verify($password,$resultado['pass'])) {
		 	$_SESSION['usuario'] = $usuario;
		 	header('Location: index.php');
		 }
	} else {
		$errores = '<li>Datos incorrectos</li>';
	}
}

require 'vistas/login.view.php';

 ?>