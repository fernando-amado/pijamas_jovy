<?php 

    require_once "../../../modelo/Material.php";

    $datos=array(
<<<<<<< HEAD
        'Nombre_material' => $_POST['nombre'],
        'Cantidad_material' => $_POST['cantidad'], 
        'Tipo_material' => $_POST['tipo'],
        'Color' => $_POST['color'], 
        'Descripcion' => $_POST['descripcion'],    
=======
        'Nombre_material' => $_POST['nombreu'],
        'Cantidad_material' => $_POST['cantidadu'], 
        'Tipo_material' => $_POST['tipou'],
        'Color' => $_POST['coloru'], 
        'Descripcion' => $_POST['descripcionu'],   
        'Id_material' => $_POST['Id_material']    
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
                  
                 );

    echo Crud::insertarDatos($datos);

 ?>