<?php 

require_once "../../../modelo/Empleado.php";
$obj= new Crud();
    $datos=$obj->mostrarDatos();

<<<<<<< HEAD
    $tabla='<table class="table ">
					<thead>
						<tr class="font-weight-bold">
							<td>Nombre </td>
							<td>Apellidos </td>
=======
    $tabla='<table class="table table-dark">
					<thead>
						<tr class="font-weight-bold">
							<td>Nombre </td>
							<td>Apellidos /td>
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
							<td>Documento </td>
							<td>Telefono</td>
							<td>Correo electronico</td>
							<td>Direccion</td>
							<td>Rol</td>
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</thead>
					<tbody>';
	$datosTabla="";

	foreach ($datos as $key => $value) {
		$datosTabla=$datosTabla.'<tr>
								<td>'.$value['nombre_us'].'</td>
<<<<<<< HEAD
								<td>'.$value['apellido_us'].'</td>
=======
								<td>'.$value['apellidos_us'].'</td>
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
								<td>'.$value['documento_us'].'</td>
								<td>'.$value['telefono_us'].'</td>
								<td>'.$value['correo_us'].'</td>
								<td>'.$value['direccion_us'].'</td>
<<<<<<< HEAD
								<td>'.$value['rol'].'</td>
=======
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
								<td>
									<span class="btn btn-info btn-sm" onclick="obtenerDatos('.$value['id_usuario'].')" data-toggle="modal"data-target="#actualizarModal">
										<i class="fas fa-edit"></i>
									</span>
									
								</td>
								<td>
									<span class="btn btn-danger btn-sm" onclick="eliminarDatos('.$value['id_usuario'].')">
										<li class="fas fa-trash-alt"></li>
									</span>
								</td>
							</tr>';
 
	}

	echo $tabla.$datosTabla.'</tbody></table>';




 ?>