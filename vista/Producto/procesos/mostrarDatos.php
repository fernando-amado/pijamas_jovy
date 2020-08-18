<?php 

require_once "../../../modelo/Producto.php";
$obj= new Crud();
    $datos=$obj->mostrarDatos();

    $tabla='<table class="table ">
					<thead>
						<tr class="font-weight-bold">
							<td>Nombre del producto</td>
							<td>Precio del producto</td>
							<td>Cantidad de articulos</td>
							<td>Tallas</td>
							<td>Orden Trabajo</td>
							<td>Pedido</td>
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</thead>
					<tbody>';
	$datosTabla="";

	foreach ($datos as $key => $value) {
		$datosTabla=$datosTabla.'<tr>
								<td>'.$value['Nombre_producto'].'</td>
								<td>'.$value['Precio_producto'].'</td>
								<td>'.$value['Cantidad_producto'].'</td>
								<td>'.$value['Talla_producto'].'</td>
								<td>'.$value['Id_orden_trabajo'].'</td>
								<td>'.$value['Id_pedido'].'</td>
								<td>
								 <span class="btn btn-info btn-sm" onclick="obtenerDatos('.$value['Id_producto'].')" data-toggle="modal"data-target="#actualizarModal">
										<i class="fas fa-edit"></i>
									</span>
								
									
								</td>
								<td>
									<span class="btn btn-danger btn-sm" onclick="eliminarDatos('.$value['Id_producto'].')">
										<li class="fas fa-trash-alt"></li>
									</span>
								</td>
							</tr>';
 
	}

	echo $tabla.$datosTabla.'</tbody></table>';




 ?>