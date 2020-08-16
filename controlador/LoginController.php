<?php
include_once '../modelo/Usuario.php';
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];
$usuario = new Usuario();

if (!empty($_SESSION['id_rol'])) {

	switch ($_SESSION['id_rol']) {
		case 1:
			header('Location: ../vista/menu/index.php');
			break;

		case 2:
			header('Location: ../vista/menu/tec_catalogo.php');
			break;
	}
} else {
	$usuario->loguearse($user, $pass);
	if (!empty($usuario->objetos)) {
		foreach ($usuario->objetos as $objeto) {
			$_SESSION['usuario'] = $objeto->id_usuario;
			$_SESSION['id_rol'] = $objeto->id_rol;
			$_SESSION['nombre_us'] = $objeto->nombre_us;
			$_SESSION['apellido_us'] = $objeto->apellido_us;
		}
		switch ($_SESSION['id_rol']) {
			case 1:
				header('Location: ../vista/menu/index.php');
				break;

			case 2:
				header('Location: ../vista/menu/tec_catalogo.php');
				break;
		}
	} else {

		
		header('Location: ../index.php');
	}
}
