<?php
	
require_once '../../modelo/Usuario.php';
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
	<title>Usuarios | Sistema Escolar</title>
	<link rel="icon" type="image/png" href="../../images/favicon.ico" />
	<link rel="stylesheet" href="../menu/css/style.css" media="screen, projection" type="text/css" />
	<link rel="stylesheet" href="../menu/css/style_icons.css" media="screen, projection" type="text/css" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
</head>
<body>
	<div class="wrapper">
		
			<?php
				include_once "../menu/index.php";
			?>
		
		<section class="content">
        <div class="form-load">
	<div class="head">
		<h1 class="titulo">Usuarios</h1>
	</div>
	
	<table>
		<tr>
			<th>Usuario</th>
			<th>Permisos</th>
			<th>Imagen</th>
			<th class="edit center"><a class="icon icon-edit"></a></th>
			<th class="delete center"><a class="icon icon-trash"></a></th>
    	</tr>
		<?php foreach($this->model->Listar() as $r): ?>
		    		<tr>
						<td><?php echo $r->nombre_us; ?></td>
						<td><?php echo $r->documento_us; ?></td>
						<td><?php echo $r->rol; ?></td>
						<td>
							<form action="#" method="POST">
								<input style="display:none;" type="text" name="id" >
								<button class="btnedit" name="btn" value="form_update" type="submit"></button>
							</form>
						</td>
						<td>
							<form action="#" method="POST">
								<input style="display:none;" type="text" name="id" >
								<input style="display:none;" type="text" name="userimage" >
								<button class="btndelete" name="btn" value="form_delete" type="submit"></button>
							</form>
						</td>
                    </tr>
					<?php endforeach; ?>

				
	</table>
	<div class="pages">
		<ul>
			<?php
			    for	($n = 1; $n <= $tpages; $n++)
				{
					if ($page == $n)
					{
						echo '<li class="active"><form name="form-pages" action="#" method="POST"><button type="submit" name="page" value="'.$n.'">'.$n.'</button></form></li>';
					}
					else
					{
						echo '<li><form name="form-pages" action="#" method="POST"><button type="submit" name="page" value="'.$n.'">'.$n.'</button></form></li>';
					}
				}
			?>
	    </ul>
	</div>
</div>
<div class="form-options">
	<div class="options">
		<form action="#" method="POST">
			<button class="btn icon icon-plus" name="btn" value="form_add" type="submit"></button>
		</form>
		<form action="#" method="POST">
			<button class="btn disabled icon icon-coding" name="btn" value="form_coding" type="submit" disabled></button>
		</form>
		<form action="#" method="POST">
			<button class="btn disabled icon icon-printer" name="btn" value="form_printer" type="submit" disabled></button>
		</form>
		<form action="/">
			<button class="btnexit icon icon-exit" type="submit"></button>
		</form>
    </div>
	<div class="search">
		<form name="form-search" action="#" method="POST">
			<p>
				<input type="text" class="text" name="search" placeholder="Buscar...">
				<button class="btn-search icon  icon-search" type="submit"></button>
			</p>
		</form>
	</div>
</div>
		</section>
	</div>
</body>
            </html>
         