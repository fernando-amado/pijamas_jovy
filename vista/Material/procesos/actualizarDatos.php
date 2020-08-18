<?php 

    require_once "../../../modelo/Material.php";

    $datos=array(
            'Nombre_material' => $_POST['nombreu'],
            'Cantidad_material' => $_POST['cantidadu'], 
            'Tipo_material' => $_POST['tipou'],
            'Color' => $_POST['coloru'], 
            'Descripcion' => $_POST['descripcionu'],   
            
            'Id_material' => $_POST['Id_material']      
                 );

    echo Crud::actualizarDatos($datos);

 ?>