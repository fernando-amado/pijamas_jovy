<?php
session_start();
if ($_SESSION['id_rol'] < 4) {
	$usuario=$_SESSION['id_rol'];
?>

	<!DOCTYPE html>
	<html lang="es">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
		<title>Pijamas Jovy</title>
		<link rel="icon" type="image/png" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css" media="screen, projection" type="text/css" />
		<link rel="stylesheet" href="css/style_icons.css" media="screen, projection" type="text/css" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
	</head>
	<body>
		<div class="wrapper">
			<header class="header">
				<div class="info-user">
					<img class="image_user" src="../../img/avatar2.png" />
					<span class="name_user"><?php echo $_SESSION['nombre_us'] . ' ' . $_SESSION['apellido_us']; ?></span>
					<span class="logout"><a href="../../controlador/Logout.php">Cerrar Sesión</a></span>
					<span class="user_active"></span>
				</div>
				<div class="info-school-period">
					<h2 class="titulo text-white text-center">Pijamas Jovy</h2>
					<a data-toggle="modal" data-target="#user1" class="nav-link">
						<svg width="75.5" height="35.5" viewBox="0 0 64 64">
							<path data-name="layer1" d="M46 26c0 6.1-3.4 11.5-7 14.8V44c0 2 1 5.1 11 7a15.5 15.5 0 0 1 12 11H2a13.4 13.4 0 0 1 11-11c10-1.8 12-5 12-7v-3.2c-3.6-3.3-7-8.6-7-14.8v-9.6C18 6 25.4 2 32 2s14 4 14 14.4z" fill="none" stroke="#D4D4D4" stroke-miterlimit="10" stroke-width="3" stroke-linejoin="round" stroke-linecap="round">
							</path>
						</svg>
					</a>
				</div>
			</header>
			<aside>
				<?php
				if ($usuario=="1" ){ 
				include_once "administrador.php";
				}
				if ($usuario=="2" ){ 
				include_once "vendedor.php";
				}
				if ($usuario=="3" ){ 
					include_once "costurero.php";
					}
				
				?>
			</aside>
		</div>
	</body>
	</html>
<?php
} else {
	header('Location:../../index.php');
}
?>