<?php
include_once "../menu/index.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="images/icons/logo.png" />
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="../../images/favicon.ico" />
	<link rel="stylesheet" href="../menu/css/style.css" media="screen, projection" type="text/css" />
	<link rel="stylesheet" href="../menu/css/style_icons.css" media="screen, projection" type="text/css" />
	<link rel="stylesheet" href="../../css/estilos.css">
	<link rel="stylesheet" href="../../css/diseño.css">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
</head>
<body>
	<div class="wrapper">
		<section class="content">
			<div class="container1">
				<div class="row">
					<h1 class="h">Cliente</h1>
				</div>
				<div class="row">
					<div class="sm-12">
						<span class="btn btn-info" data-toggle="modal" data-target="#insertarModal">
							<i class="fas fa-plus-circle"></i> Nuevo registro
						</span>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-12">
						<div id="tablaDatos"></div>
					</div>
				</div>
				<?php if ($usuario=="1" ){ ?>
				<div class="well well-sm text-right">
					<a class=" btn btn-info" href="../../modelo/reportes/cliente.php" target="_blank"> Generar reporte </a>
					<a class=" btn btn-info" href="../../modelo/reportes/cliente.php" download="reportecliente">Descargar reporte </a>
				</div>
				<?php }?>
				
			</div>
	</div>
	</div>
	</div>
	</div>
	<?php require_once "modalInsert.php" ?>
	<?php require_once "modalUpdate.php" ?>
	<script src="../librerias/bootstrap4/jquery-3.4.1.min.js"></script>
	<script src="../librerias/bootstrap4/popper.min.js"></script>
	<script src="../librerias/bootstrap4/bootstrap.min.js"></script>
	<script src="../librerias/sweetalert.min.js"></script>
	<script src="js/crud.js"></script>
	<script type="text/javascript">
		mostrar();
	</script>
</body>
</html>