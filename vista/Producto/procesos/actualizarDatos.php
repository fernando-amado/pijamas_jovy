<?php 

    require_once "../../../modelo/Producto.php";

    $datos=array(
            'Nombre_producto' => $_POST['productou'],
            'Precio_producto' => $_POST['preciou'], 
            'Cantidad_producto' => $_POST['cantidadu'], 
            'Talla_producto' => $_POST['tallau'],
            'Id_orden_trabajo' => $_POST['ordentrabajou'], 
            'Id_pedido' => $_POST['pedidou'],   
            
            'Id_producto' => $_POST['Id_producto']      
                 );

    echo Crud::actualizarDatos($datos);

 ?>