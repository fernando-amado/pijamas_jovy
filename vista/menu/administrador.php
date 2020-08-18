
<div class="modal fade sidebar" id="user1" tabindex="-1" role="dialog" aria-labelledby="cartLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
</div>

<div class="nav-admin-home">
	<img class="image_user" src="../../img/avatar2.png" />
	<span class="name_user"><?php echo $_SESSION['nombre_us'].' '.$_SESSION['apellido_us'];?></span>
	<ul class="first">
		<li><a class="<?php if($output[1] == 'school_periods'){ echo 'active'; } ?>" href="#">Inicio</a></li>
	</ul>
	<ul class="second">
		<li><a class="<?php if($output[1] == 'users'){ echo 'active'; } ?>" href="../Usuario/index.php">Usuarios</a></li>
		<li><a class="<?php if($output[1] == 'administratives'){ echo 'active'; } ?>" href="·">Empleados</a></li>
		<li><a class="<?php if($output[1] == 'teachers'){ echo 'active'; } ?>" href="../Producto/index.php">Producto</a></li>
		<li><a class="<?php if($output[1] == 'students'){ echo 'active'; } ?>" href="../Material/index.php">Material</a></li>
	</ul>
	<ul class="last">
		<li><a class="<?php if($output[1] == 'subjects'){ echo 'active'; } ?>" href="/modules/subjects">Materias</a></li>
		<li><a class="<?php if($output[1] == 'groups'){ echo 'active'; } ?>" href="/modules/groups">Grupos</a></li>
	</ul>
	<ul class="last">
		<li><a  class="<?php if($output[1] == 'assists'){ echo 'active'; } ?>" href="../Cliente/index.php">Clientes</a></li>
	</ul>
</div>
</div>
</div>