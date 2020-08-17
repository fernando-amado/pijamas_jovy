<?php 

    require_once "../../../modelo/Cliente.php";

    $datos=array(
            'Nombres_cliente' => $_POST['nombre'],
            'Apellidos_cliente' => $_POST['apellido'], 
            'Documento_cliente' => $_POST['documento'], 
            'Telefono_cliente' => $_POST['telefono'],
            'Correo_cliente' => $_POST['correo'],
            'Direccion_cliente' => $_POST['direccion'],
                  
                 );

    echo Crud::insertarDatos($datos);

 ?>