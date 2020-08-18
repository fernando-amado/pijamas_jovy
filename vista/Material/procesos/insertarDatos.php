<?php 

    require_once "../../../modelo/Material.php";

    $datos=array(
        'Nombre_material' => $_POST['nombre'],
        'Cantidad_material' => $_POST['cantidad'], 
        'Tipo_material' => $_POST['tipo'],
        'Color' => $_POST['color'], 
        'Descripcion' => $_POST['descripcion'],    
                  
                 );

    echo Crud::insertarDatos($datos);

 ?>