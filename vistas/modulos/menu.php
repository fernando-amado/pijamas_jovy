<<<<<<< HEAD
<style>
.foto{
	width: 100px;
	border-radius: 50%;
}

.nombre{
	color:white;
	font-size:19px;
}

</style>

=======
>>>>>>> fernando
<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

		<?php

<<<<<<< HEAD
		if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Costurero") {
			if($_SESSION["foto"] != ""){

				echo '<center><img src=" '.$_SESSION["foto"].'" class="foto"></center><br>
				        <center><span class="nombre">'.$_SESSION["nombre"].'</span></center><br>';

			}else{


				echo '<center><img src="vistas/img/usuarios/default/anonymous.png" class="user-image"></center>';
			}
		}

=======
>>>>>>> fernando
		if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
<<<<<<< HEAD
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inicio
=======
					<span>Inicio</span>
>>>>>>> fernando

				</a>

			</li>

			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
<<<<<<< HEAD
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Usuarios
=======
					<span>Usuarios</span>
>>>>>>> fernando

				</a>

			</li>
			<li>

				<a href="tipomaterial">

					<i class="fa fa-th"></i>
<<<<<<< HEAD
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tipo de Materiales
=======
					<span>Tipo de Materiales</span>
>>>>>>> fernando

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Costurero"){

			echo '<li>

				<a href="categorias">

					<i class="fa fa-tags"></i>
<<<<<<< HEAD
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Categorias
=======
					<span>Categorías</span>
>>>>>>> fernando

				</a>

			</li>

			<li>

				<a href="productos">

					<i class="fa fa-product-hunt"></i>
<<<<<<< HEAD
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Productos
=======
					<span>Productos</span>
>>>>>>> fernando

				</a>

			</li>
			<li>

				<a href="material">

					<i class="fa fa-cut" style="font-size:18px;"></i>
<<<<<<< HEAD
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material
=======
					<span>Materiales</span>
>>>>>>> fernando

				</a>

			</li>
			<li>

				<a href="ordentrabajo">

					<i class="fa fa-cut" style="font-size:18px;"></i>
<<<<<<< HEAD
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orden de trabajo
=======
					<span>Orden de trabajo</span>
>>>>>>> fernando

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li>

				<a href="clientes">

					<i class="fa fa-users"></i>
<<<<<<< HEAD
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clientes
=======
					<span>Clientes</span>
>>>>>>> fernando

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

<<<<<<< HEAD
			echo '<li>

				<a href="ventas">

					<i class="fa fa-shopping-cart"></i>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ventas

				</a>

			</li>';
=======
			echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-shopping-cart" style="font-size:18px;"></i>
					
					<span>Ventas</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="ventas">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar ventas</span>

						</a>

					</li>

					<li>

						<a href="crear-venta">
							
							<i class="fa fa-circle-o"></i>
							<span>Crear venta</span>

						</a>

					</li>';
>>>>>>> fernando

					if($_SESSION["perfil"] == "Administrador"){

					echo '<li>

						

					</li>';

					}

				

				echo '</ul>

			</li>';

		}

		?>

		</ul>

	 </section>

</aside>