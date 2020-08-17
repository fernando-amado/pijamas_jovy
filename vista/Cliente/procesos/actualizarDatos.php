<?php 

    require_once "../../../modelo/Cliente.php";

    $datos=array(
            'Nombres_cliente' => $_POST['nombreu'],
            'Apellidos_cliente' => $_POST['apellidou'], 
            'Documento_cliente' => $_POST['documentou'], 
            'Telefono_cliente' => $_POST['telefonou'],
            'Correo_cliente' => $_POST['correou'], 
            'Direccion_cliente' => $_POST['direccionu'],   
            
            'Id_cliente' => $_POST['Id_cliente']      
                 );

    echo Crud::actualizarDatos($datos);

 ?>