<?php 

    require_once "../../../modelo/Producto.php";

    $datos=array(
            'Nombre_producto' => $_POST['producto'],
            'Precio_producto' => $_POST['precio'], 
            'Cantidad_producto' => $_POST['cantidad'], 
            'Talla_producto' => $_POST['talla'],
            'Id_orden_trabajo' => $_POST['ordentrabajo'],
            'Id_pedido' => $_POST['pedido'],
                  
                 );

    echo Crud::insertarDatos($datos);

 ?>