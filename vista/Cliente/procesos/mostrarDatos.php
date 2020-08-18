<?php 

require_once "../../../modelo/Cliente.php";
$obj= new Crud();
    $datos=$obj->mostrarDatos();

    $tabla='<table class="table ">
					<thead>
						<tr class="font-weight-bold">
							<td>Nombre del cliente</td>
							<td>Apellidos del cliente</td>
							<td>Documento </td>
							<td>Telefono</td>
							<td>Correo electronico</td>
							<td>Direccion</td>
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</thead>
					<tbody>';
	$datosTabla="";

	foreach ($datos as $key => $value) {
		$datosTabla=$datosTabla.'<tr>
								<td>'.$value['Nombres_cliente'].'</td>
								<td>'.$value['Apellidos_cliente'].'</td>
								<td>'.$value['Documento_cliente'].'</td>
								<td>'.$value['Telefono_cliente'].'</td>
								<td>'.$value['Correo_cliente'].'</td>
								<td>'.$value['Direccion_cliente'].'</td>
								<td>
									<span class="btn btn-info btn-sm" onclick="obtenerDatos('.$value['Id_cliente'].')" data-toggle="modal"data-target="#actualizarModal">
										<i class="fas fa-edit"></i>
									</span>
									
								</td>
								<td>
									<span class="btn btn-danger btn-sm" onclick="eliminarDatos('.$value['Id_cliente'].')">
										<li class="fas fa-trash-alt"></li>
									</span>
								</td>
							</tr>';
 
	}

	echo $tabla.$datosTabla.'</tbody></table>';




 ?>