<?php 

require_once "../../../modelo/Empleado.php";
$obj= new Crud();
    $datos=$obj->mostrarDatos();

    $tabla='<table class="table ">
					<thead>
						<tr class="font-weight-bold">
							<td>Nombre </td>
							<td>Apellidos </td>
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
								<td>'.$value['apellido_us'].'</td>
								<td>'.$value['documento_us'].'</td>
								<td>'.$value['telefono_us'].'</td>
								<td>'.$value['correo_us'].'</td>
								<td>'.$value['direccion_us'].'</td>
								<td>'.$value['rol'].'</td>
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