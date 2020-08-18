
<div class="modal fade sidebar" id="user1" tabindex="-1" role="dialog" aria-labelledby="cartLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
</div>

<div class="nav-admin-home">
<<<<<<< HEAD
	<img class="image_user" src="../../img/avatar2.png" />
	<span class="name_user"><?php echo $_SESSION['nombre_us'].' '.$_SESSION['apellido_us'];?></span>
=======
<<<<<<< HEAD
	<img class="image_user" src="/images/users/" />
	<span class="name_user"><?php echo $_SESSION ['nombre_us'].' '. $_SESSION ['apellido_us'];?></span>
=======
	<img class="image_user" src="/images/users/<?php echo $_SESSION['image'];?>" />
	<span class="name_user"><?php echo $_SESSION['nombre_us'];?></span>
>>>>>>> fernando
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
	<ul class="first">
		<li><a class="<?php if($output[1] == 'school_periods'){ echo 'active'; } ?>" href="/modules/school_periods">Periodo Escolar</a></li>
	</ul>
	<ul class="second">
<<<<<<< HEAD
		<li><a class="<?php if($output[1] == 'users'){ echo 'active'; } ?>" href="../Usuario/index.php">Usuarios</a></li>
		<li><a class="<?php if($output[1] == 'administratives'){ echo 'active'; } ?>" href="·">Empleados</a></li>
		<li><a class="<?php if($output[1] == 'teachers'){ echo 'active'; } ?>" href="../Producto/index.php">Producto</a></li>
		<li><a class="<?php if($output[1] == 'students'){ echo 'active'; } ?>" href="../Material/index.php">Material</a></li>
=======
<<<<<<< HEAD
		<li><a class="<?php if($output[1] == 'users'){ echo 'active'; } ?>" href="../usuario/usuario.php">Usuarios</a></li>
=======
		<li><a class="<?php if($output[1] == 'users'){ echo 'active'; } ?>" href="#">Usuarios</a></li>
>>>>>>> fernando
		<li><a class="<?php if($output[1] == 'administratives'){ echo 'active'; } ?>" href="/modules/administratives">Administrativos</a></li>
		<li><a class="<?php if($output[1] == 'teachers'){ echo 'active'; } ?>" href="../Usuario/index.php">Empleados</a></li>
		<li><a class="<?php if($output[1] == 'students'){ echo 'active'; } ?>" href="../Producto/index.php">Producto</a></li>
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
	</ul>
	<ul class="last">
		<li><a class="<?php if($output[1] == 'subjects'){ echo 'active'; } ?>" href="../Material/index.php">Material</a></li>
		<li><a class="<?php if($output[1] == 'groups'){ echo 'active'; } ?>" href="/modules/groups">Grupos</a></li>
	</ul>
	<ul class="last">
		<li><a  class="<?php if($output[1] == 'assists'){ echo 'active'; } ?>" href="../Cliente/index.php">Clientes</a></li>
	</ul>
</div>
</div>
</div>