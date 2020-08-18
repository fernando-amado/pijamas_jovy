<?php 

require_once "../../../modelo/Material.php";
$obj= new Crud();
    $datos=$obj->mostrarDatos();

    $tabla='<table class="table ">
					<thead>
						<tr class="font-weight-bold">
							<td>Nombre del material</td>
							<td>Cantidad </td>
							<td>Tipo de material</td>
							<td>Color</td>
							<td>Descripcion del material</td>
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</thead>
					<tbody>';
	$datosTabla="";

	foreach ($datos as $key => $value) {
		$datosTabla=$datosTabla.'<tr>
								<td>'.$value['Nombre_material'].'</td>
								<td>'.$value['Cantidad_material'].'</td>
								<td>'.$value['Tipo_material'].'</td>
								<td>'.$value['Color'].'</td>
								<td>'.$value['Descripcion'].'</td>
								<td>
									<span class="btn btn-info btn-sm" onclick="obtenerDatos('.$value['Id_material'].')" data-toggle="modal"data-target="#actualizarModal">
										<i class="fas fa-edit"></i>
									</span>
									
								</td>
								<td>
									<span class="btn btn-danger btn-sm" onclick="eliminarDatos('.$value['Id_material'].')">
										<li class="fas fa-trash-alt"></li>
									</span>
								</td>
							</tr>';
 
	}

	echo $tabla.$datosTabla.'</tbody></table>';




 ?>