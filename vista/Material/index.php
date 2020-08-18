
<<<<<<< HEAD
		
<!DOCTYPE html>
<html>
<head>
=======
<!DOCTYPE html>
<html>
<head>
	<title>Ambiente</title>
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
	<link rel="icon" type="image/png" href="images/icons/logo.png"/>
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="../../images/favicon.ico" />
	<link rel="stylesheet" href="../menu/css/style.css" media="screen, projection" type="text/css" />
	<link rel="stylesheet" href="../menu/css/style_icons.css" media="screen, projection" type="text/css" />
<<<<<<< HEAD
	<link rel="stylesheet" href="../../css/estilos.css">
	
=======
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
	<meta name="description" content="" />
	<meta name="keywords" content="" />
</head>
<body>
<<<<<<< HEAD

<?php
	include_once "../menu/index.php"				
?>
	<div class="container1">
		<div class="row">
			<h1 class="h">Material</h1>
			
					</div>
				
						<div class="row">
							<div class="sm-12">
=======
	<div class="wrapper">
		
			<?php
				include_once "../menu/index.php";
			?>
		
		<section class="content">


	<div class="container">
		<div class="row">
			<h2>Material</h2>
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs">
							<li class="nav-item">

							
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
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
