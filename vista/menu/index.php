<?php
session_start();
if($_SESSION['id_rol']==1){
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
	<title>Sistema Escolar</title>
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
	<img class="image_user" src="/images/users/" />
	<span class="name_user"><?php echo $_SESSION ['nombre_us'];?></span>
	<span class="logout"><a href="../../controlador/Logout.php">Cerrar Sesión</a></span>
	<span class="user_active"></span>
</div>

<div class="info-school-period">
	<span class="school_period_user">
		Periodo Escolar >
		<a href="#"></a>
	</span>
</div>
		</header>
		<aside>
			<?php
				
				
					include_once "administrador.php";
				
			?>
		</aside>
		<img style="width:971px; float:right; box-shadow: 0 2px 6px rgba(0,0,0,0.1); pointer-events: none;" src="images/dashboard.png" />
	</div>
</body>
</html>
<?php
 }
 else{
	header('Location:../../index.php');
}
?>

