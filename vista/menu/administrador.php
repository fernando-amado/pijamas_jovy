
<div class="nav-admin-home">
	<img class="image_user" src="/images/users/<?php echo $_SESSION['image'];?>" />
	<span class="name_user"><?php echo $_SESSION['nombre_us'];?></span>
	<ul class="first">
		<li><a class="<?php if($output[1] == 'school_periods'){ echo 'active'; } ?>" href="/modules/school_periods">Periodo Escolar</a></li>
	</ul>
	<ul class="second">
		<li><a class="<?php if($output[1] == 'users'){ echo 'active'; } ?>" href="#">Usuarios</a></li>
		<li><a class="<?php if($output[1] == 'administratives'){ echo 'active'; } ?>" href="/modules/administratives">Administrativos</a></li>
		<li><a class="<?php if($output[1] == 'teachers'){ echo 'active'; } ?>" href="/modules/teachers">Empleados</a></li>
		<li><a class="<?php if($output[1] == 'students'){ echo 'active'; } ?>" href="../Producto/index.php">Producto</a></li>
	</ul>
	<ul class="last">
		<li><a class="<?php if($output[1] == 'subjects'){ echo 'active'; } ?>" href="/modules/subjects">Materias</a></li>
		<li><a class="<?php if($output[1] == 'groups'){ echo 'active'; } ?>" href="/modules/groups">Grupos</a></li>
	</ul>
	<ul class="last">
		<li><a  class="<?php if($output[1] == 'assists'){ echo 'active'; } ?>" href="../Cliente/index.php">Clientes</a></li>
	</ul>
</div>